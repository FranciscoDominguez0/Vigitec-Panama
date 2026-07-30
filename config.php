<?php
// config.php - CARGADOR DE VARIABLES DE ENTORNO
// Lee el archivo .env de forma segura

$envPath = __DIR__ . '/.env';
if (file_exists($envPath)) {
    $envVariables = parse_ini_file($envPath);
    if ($envVariables !== false) {
        foreach ($envVariables as $key => $value) {
            putenv("$key=$value");
            $_ENV[$key] = $value;
            $_SERVER[$key] = $value;
        }
    }
}

// Definir constante para uso en scripts heredados
define('RECAPTCHA_SECRET_KEY', getenv('RECAPTCHA_SECRET_KEY') ?: '');
?>
