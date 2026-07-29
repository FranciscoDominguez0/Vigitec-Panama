<?php
header('Content-Type: application/json');
require_once 'config.php'; // Cargar llave secreta de forma segura

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
$to = 'fdominguez@vigitecpanama.com';
$subject = 'NUEVA COTIZACION WEB (Validada por reCAPTCHA)';

$message = "Se ha recibido una nueva solicitud de cotización desde la página web:\n\n";
$message .= "Nombre: " . $nombre . "\n";
$message .= "Teléfono: " . $telefono . "\n";
$message .= "Correo: " . $email . "\n";
$message .= "Servicio de Interés: " . $servicio . "\n";
$message .= "Detalles Adicionales:\n" . $detalles . "\n\n";
$message .= "--\nEnviado desde el formulario seguro de vigitecpanama.com";

// En PHP estándar se usa el dominio propio para evitar que caiga en Spam
$headers = "From: noreply@vigitecpanama.com\r\n";
$headers .= "Reply-To: " . $email . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

if (mail($to, $subject, $message, $headers)) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'message' => 'Error interno al enviar el correo. Por favor contáctenos por teléfono.']);
}
?>
