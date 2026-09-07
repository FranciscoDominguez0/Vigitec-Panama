<?php
declare(strict_types=1);

require_once __DIR__ . '/../config.php'; // Importar credenciales de forma segura

/**
 * --- FUNCIONES AUXILIARES ---
 */

/**
 * Envía una respuesta en formato JSON de forma segura y finaliza la ejecución.
 */
function enviarRespuestaJSON(bool $exito, string $mensaje = ''): void {
    // Prevenir que advertencias o espacios en blanco rompan la respuesta JSON
    if (ob_get_length()) {
        ob_clean();
    }
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['success' => $exito, 'message' => $mensaje]);
    exit;
}

/**
 * Obtiene y limpia un dato proveniente de $_POST para evitar inyecciones XSS.
 */
function limpiarDato(string $clave): string {
    if (!isset($_POST[$clave])) {
        return '';
    }
    return trim(htmlspecialchars($_POST[$clave], ENT_QUOTES, 'UTF-8'));
}

/**
 * Verifica el token de reCAPTCHA contra la API de Google.
 */
function verificarRecaptcha(string $respuestaRecaptcha, string $claveSecreta): bool {
    if (empty($respuestaRecaptcha) || empty($claveSecreta)) {
        return false;
    }

    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $datos = ['secret' => $claveSecreta, 'response' => $respuestaRecaptcha];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($datos));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $respuesta = curl_exec($ch);
    
    // Si cURL falla al conectar, asumimos verificación fallida
    if (curl_errno($ch)) {
        return false;
    }

    $datosRespuesta = json_decode($respuesta, true);
    return isset($datosRespuesta['success']) && $datosRespuesta['success'] === true;
}

/**
 * Envía un correo electrónico utilizando la API de Resend.
 */
function enviarCorreoResend(string $apiKey, string $destinatario, string $responderA, string $asunto, string $mensaje): bool {
    $url = 'https://api.resend.com/emails';
    
    $datos = [
        // En producción, cambiar por un dominio propio verificado (ej. no-reply@vigitecpanama.com)
        'from' => 'onboarding@resend.dev', 
        'to' => $destinatario,
        'reply_to' => $responderA,
        'subject' => $asunto,
        'text' => $mensaje
    ];

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ' . $apiKey,
        'Content-Type: application/json'
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($datos));
    
    curl_exec($ch);
    $codigoHttp = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
    return ($codigoHttp >= 200 && $codigoHttp < 300);
}


/**
 * --- FLUJO PRINCIPAL ---
 */

// Iniciar buffer para evitar salida accidental de texto
ob_start();

try {
    // 1. Validar configuración crítica del servidor
    $resendApiKey = getenv('RESEND_API_KEY');
    if (empty($resendApiKey)) {
        enviarRespuestaJSON(false, 'Error de configuración del servidor de correos.');
    }

    $claveSecretaRecaptcha = defined('RECAPTCHA_SECRET_KEY') ? RECAPTCHA_SECRET_KEY : '';
    
    // 2. Obtener y sanitizar datos del formulario
    $nombre   = limpiarDato('Nombre');
    $telefono = limpiarDato('Teléfono');
    $email    = limpiarDato('Email');
    $servicio = limpiarDato('Servicio');
    $detalles = limpiarDato('Detalles');
    $recaptchaResponse = limpiarDato('g-recaptcha-response');

    // 3. Verificaciones de seguridad (reCAPTCHA)
    if (empty($recaptchaResponse)) {
        enviarRespuestaJSON(false, 'Por favor, marque la casilla de "No soy un robot".');
    }

    if (!verificarRecaptcha($recaptchaResponse, $claveSecretaRecaptcha)) {
        enviarRespuestaJSON(false, 'Verificación de seguridad fallida. Inténtelo de nuevo.');
    }

    // 4. Preparar el contenido del correo
    $asunto = 'NUEVA COTIZACIÓN WEB (Validada por reCAPTCHA)';
    $mensaje = "Se ha recibido una nueva solicitud de cotización desde la página web:\n\n"
             . "Nombre: $nombre\n"
             . "Teléfono: $telefono\n"
             . "Correo: $email\n"
             . "Servicio de Interés: $servicio\n"
             . "Detalles Adicionales:\n$detalles\n\n"
             . "--\nEnviado desde el formulario seguro de vigitecpanama.com";

    $correoDestino = getenv('SMTP_DESTINATION') ?: 'info@vigitecpanama.com';

    // 5. Enviar el correo final
    $envioExitoso = enviarCorreoResend($resendApiKey, $correoDestino, $email, $asunto, $mensaje);

    // 6. Evaluar el resultado y responder al cliente
    if ($envioExitoso) {
        enviarRespuestaJSON(true);
    } else {
        enviarRespuestaJSON(false, 'Error al enviar a través de Resend. Inténtelo más tarde.');
    }

} catch (Exception $e) {
    // Capturar cualquier error no previsto de forma silenciosa para el usuario
    enviarRespuestaJSON(false, 'Ha ocurrido un error inesperado. Inténtelo más tarde.');
}
