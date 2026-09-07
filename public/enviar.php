<?php
ob_start(); // Iniciar buffer para evitar que warnings rompan el JSON
header('Content-Type: application/json');
require_once __DIR__ . '/../config.php'; // Cargar llave secreta de forma segura

// Recibir los datos del formulario
$nombre = isset($_POST['Nombre']) ? trim($_POST['Nombre']) : '';
$telefono = isset($_POST['Teléfono']) ? trim($_POST['Teléfono']) : '';
$email = isset($_POST['Email']) ? trim($_POST['Email']) : '';
$servicio = isset($_POST['Servicio']) ? trim($_POST['Servicio']) : '';
$detalles = isset($_POST['Detalles']) ? trim($_POST['Detalles']) : '';
$recaptcha_response = isset($_POST['g-recaptcha-response']) ? $_POST['g-recaptcha-response'] : '';

// 1. Verificar si se completó el Captcha
if (empty($recaptcha_response)) {
    echo json_encode(['success' => false, 'message' => 'Por favor, marque la casilla de "No soy un robot".']);
    exit;
}

// 2. Validar con los servidores de Google
$secret_key = RECAPTCHA_SECRET_KEY;
$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array('secret' => $secret_key, 'response' => $recaptcha_response);

// Usar cURL o file_get_contents para enviar a Google
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$verify_response = file_get_contents($url, false, $context);
$response_data = json_decode($verify_response);

if (!$response_data->success) {
    echo json_encode(['success' => false, 'message' => 'Verificación de seguridad fallida. Inténtelo de nuevo.']);
    exit;
}

// 3. Enviar el correo
$to = 'info@vigitecpanama.com';
$subject = 'NUEVA COTIZACION WEB (Validada por reCAPTCHA)';

$message = "Se ha recibido una nueva solicitud de cotización desde la página web:\n\n";
$message .= "Nombre: " . $nombre . "\n";
$message .= "Teléfono: " . $telefono . "\n";
$message .= "Correo: " . $email . "\n";
$message .= "Servicio de Interés: " . $servicio . "\n";
$message .= "Detalles Adicionales:\n" . $detalles . "\n\n";
$message .= "--\nEnviado desde el formulario seguro de vigitecpanama.com";

// Determinar correo de destino dinámico
$destEmail = getenv('SMTP_DESTINATION');
if (empty($destEmail)) {
    $destEmail = 'info@vigitecpanama.com';
}

$resend_api_key = getenv('RESEND_API_KEY');

// Si no hay API key de Resend, fallar
if (empty($resend_api_key)) {
    if (ob_get_length()) ob_clean();
    echo json_encode(['success' => false, 'message' => 'Error de configuración del servidor de correos.']);
    exit;
}

$ch = curl_init('https://api.resend.com/emails');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . $resend_api_key,
    'Content-Type: application/json'
]);

$payload = json_encode([
    'from' => 'onboarding@resend.dev', // Debe ser reemplazado por un dominio verificado en Resend en producción ej: info@vigitecpanama.com
    'to' => $destEmail,
    'reply_to' => $email,
    'subject' => $subject,
    'text' => $message // Enviamos como texto plano, igual que antes
]);

curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if (ob_get_length()) ob_clean();

if ($httpcode >= 200 && $httpcode < 300) {
    echo json_encode(['success' => true]);
} else {
    // En caso de error, se puede registrar $response para depuración
    echo json_encode(['success' => false, 'message' => 'Error al enviar a través de Resend. Inténtelo más tarde.']);
}
?>
