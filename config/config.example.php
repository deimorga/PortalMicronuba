<?php
// Detectar Entorno y Definir Ruta Base
if ($_SERVER['HTTP_HOST'] === 'localhost:8000' || in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'])) {
    define('BASE_URL', ''); // Entorno Local
} else {
    define('BASE_URL', '/sitepro/portal_web_micronuba/'); // Entorno Producción
}

// Configuración del Servidor de Correo (SMTP)
// Por favor, llena estos datos con la información de tu proveedor de correo.

define('SMTP_HOST', 'smtp.example.com');         // Servidor de correo saliente
define('SMTP_PORT', 465);                        // Puerto SMTP (SSL)
define('SMTP_USER', 'user@example.com');         // Tu correo completo
define('SMTP_PASS', 'password');                 // Tu contraseña
define('SMTP_SECURE', 'ssl');                    // Usamos SSL para el puerto 465

// Configuración del Remitente
define('MAIL_FROM_EMAIL', 'user@example.com'); 
define('MAIL_FROM_NAME', 'Portal MicroNuba');

// Configuración del Destinatario (A donde llegan las cotizaciones)
define('MAIL_TO_EMAIL', 'contacto@micronuba.net');
?>
