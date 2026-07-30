<?php
ob_start(); // Iniciar buffer para evitar que warnings rompan el JSON
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
$to = 'info@vigitecpanama.com';
$subject = 'NUEVA COTIZACION WEB (Validada por reCAPTCHA)';

$message = "Se ha recibido una nueva solicitud de cotización desde la página web:\n\n";
$message .= "Nombre: " . $nombre . "\n";
$message .= "Teléfono: " . $telefono . "\n";
$message .= "Correo: " . $email . "\n";
$message .= "Servicio de Interés: " . $servicio . "\n";
$message .= "Detalles Adicionales:\n" . $detalles . "\n\n";
$message .= "--\nEnviado desde el formulario seguro de vigitecpanama.com";

require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    // Configuración del servidor SMTP
    $mail->isSMTP();
    $mail->Host       = getenv('SMTP_HOST');
    $mail->SMTPAuth   = true;
    $mail->Username   = getenv('SMTP_USER');
    $mail->Password   = getenv('SMTP_PASS');
    
    // Determinar la seguridad por el puerto
    $puerto = getenv('SMTP_PORT');
    $mail->Port = $puerto;
    if ($puerto == 465) {
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    } else {
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    }

    // Desactivar validación estricta de SSL local (útil en algunos hostings)
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    // Remitente y Destinatario
    $mail->setFrom(getenv('SMTP_USER'), 'Cotizaciones Web Vigitec');
    
    // Correo de destino dinámico (si está vacío, usa el mismo SMTP_USER)
    $destEmail = getenv('SMTP_DESTINATION');
    if (empty($destEmail)) {
        $destEmail = getenv('SMTP_USER');
    }
    $mail->addAddress($destEmail, 'Destinatario Vigitec'); 
    
    $mail->addReplyTo($email, $nombre); // Responder al cliente

    // Contenido del correo
    $mail->CharSet = 'UTF-8';
    $mail->isHTML(false);
    $mail->Subject = $subject;
    $mail->Body    = $message;

    $mail->send();
    
    // Limpiar cualquier warning/notice previo para no corromper el JSON
    if (ob_get_length()) ob_clean();
    echo json_encode(['success' => true]);
} catch (Exception $e) {
    if (ob_get_length()) ob_clean();
    echo json_encode(['success' => false, 'message' => 'Error al enviar por SMTP. Inténtelo más tarde.']);
}
?>
