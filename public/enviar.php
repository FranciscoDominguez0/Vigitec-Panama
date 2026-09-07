<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

ob_start(); // Prevenir que advertencias de PHP rompan la respuesta JSON
header('Content-Type: application/json');
require_once __DIR__ . '/../config.php'; // Importar credenciales de forma segura

// 1. Recibir y limpiar los datos del formulario (Evitar inyección de código)
$nombre = isset($_POST['Nombre']) ? trim($_POST['Nombre']) : '';
$telefono = isset($_POST['Teléfono']) ? trim($_POST['Teléfono']) : '';
$email = isset($_POST['Email']) ? trim($_POST['Email']) : '';
$servicio = isset($_POST['Servicio']) ? trim($_POST['Servicio']) : '';
$detalles = isset($_POST['Detalles']) ? trim($_POST['Detalles']) : '';
$recaptcha_response = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : '';

// 2. Validar que el usuario haya marcado la casilla de reCAPTCHA (Protección Anti-Spam)
if (empty($recaptcha_response)) {
    echo json_encode(['success' => false, 'message' => 'Por favor, marque la casilla de "No soy un robot".']);
    exit;
}

// 3. Verificar el reCAPTCHA directamente con los servidores de Google
$secret_key = RECAPTCHA_SECRET_KEY;
$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = ['secret' => $secret_key, 'response' => $recaptcha_response];

$ch_recaptcha = curl_init();
curl_setopt($ch_recaptcha, CURLOPT_URL, $url);
curl_setopt($ch_recaptcha, CURLOPT_POST, true);
curl_setopt($ch_recaptcha, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch_recaptcha, CURLOPT_RETURNTRANSFER, true);
$verify_response = curl_exec($ch_recaptcha);
$curl_error_msg = curl_error($ch_recaptcha);

$response_data = json_decode($verify_response);

// Add better error handling to see what is failing if needed
if (!$response_data || !isset($response_data->success) || !$response_data->success) {
    // Guardar el error en un archivo para que lo pueda leer:
    file_put_contents(__DIR__ . '/debug_recaptcha.txt', print_r([
        'time' => date('Y-m-d H:i:s'),
        'debug' => $response_data, 
        'raw' => $verify_response, 
        'curl_err' => $curl_error_msg
    ], true));
    
    // Modo depuración activo:
    if (ob_get_length()) ob_clean();
    echo json_encode([
        'success' => false, 
        'message' => 'Error de recaptcha', 
        'debug' => $response_data, 
        'raw_response' => $verify_response, 
        'curl_error' => $curl_error_msg,
        'secret_key_length' => strlen($secret_key),
        'secret_key_start' => substr($secret_key, 0, 5)
    ]); 
    exit;
}

// 4. Preparar el contenido del correo electrónico
$subject = 'NUEVA COTIZACIÓN WEB (Validada por reCAPTCHA)';
$message = "Se ha recibido una nueva solicitud de cotización desde la página web:\n\n"
         . "Nombre: $nombre\n"
         . "Teléfono: $telefono\n"
         . "Correo: $email\n"
         . "Servicio de Interés: $servicio\n"
         . "Detalles Adicionales:\n$detalles\n\n"
         . "--\nEnviado desde el formulario seguro de vigitecpanama.com";

// 5. Configurar el correo de destino (Desde el archivo .env)
$destEmail = getenv('SMTP_DESTINATION') ?: 'info@vigitecpanama.com';
$resend_api_key = getenv('RESEND_API_KEY');

// Si el servidor no tiene la clave de Resend configurada, mostramos error
if (empty($resend_api_key)) {
    if (ob_get_length()) ob_clean(); // Limpiar cualquier texto residual antes de enviar JSON
    echo json_encode(['success' => false, 'message' => 'Error de configuración del servidor de correos.']);
    exit;
}

// 6. Enviar el correo utilizando la API de Resend vía cURL
$ch = curl_init('https://api.resend.com/emails');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);

// Cabeceras de autenticación obligatorias para Resend
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . $resend_api_key,
    'Content-Type: application/json'
]);

// Paquete de datos en formato JSON a enviar
$payload = json_encode([
    'from' => 'onboarding@resend.dev', // En producción, cambiar por un correo verificado (ej. info@vigitecpanama.com)
    'to' => $destEmail,
    'reply_to' => $email, // Permite responder directamente al cliente
    'subject' => $subject,
    'text' => $message // Se envía en formato de texto plano
]);

curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);


// Limpiar buffer nuevamente para garantizar que la respuesta sea un JSON puro
if (ob_get_length()) ob_clean();

// 7. Evaluar el resultado del envío
if ($httpcode >= 200 && $httpcode < 300) {
    echo json_encode(['success' => true]); // Envío exitoso
} else {
    $error_msg = error_get_last();
    echo json_encode([
        'success' => false, 
        'message' => 'Error al enviar a través de Resend.', 
        'http_code' => $httpcode, 
        'resend_response' => $response,
        'php_error' => $error_msg
    ]);
}

