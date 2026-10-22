<?php
// Configuración del portal. Este archivo está versionado y NO lleva secretos:
// todos los valores llegan como variables de entorno (archivo .env, que nunca
// va a git; ver .env.example). En Docker los inyecta `env_file` del compose.

function config_env(string $clave, string $porDefecto = ''): string
{
    $valor = getenv($clave);
    return ($valor === false || $valor === '') ? $porDefecto : $valor;
}

// Ruta base para el <base href> de las páginas. En el VPS el portal se sirve
// desde la raíz del dominio.
define('BASE_URL', config_env('BASE_URL', '/'));

// Servidor de correo saliente (SMTP) para el formulario de cotización
define('SMTP_HOST', config_env('SMTP_HOST'));
define('SMTP_PORT', (int) config_env('SMTP_PORT', '465'));
define('SMTP_USER', config_env('SMTP_USER'));
define('SMTP_PASS', config_env('SMTP_PASS'));
define('SMTP_SECURE', config_env('SMTP_SECURE', 'ssl'));

// Remitente y destinatario de las cotizaciones
define('MAIL_FROM_EMAIL', config_env('MAIL_FROM_EMAIL'));
define('MAIL_FROM_NAME', config_env('MAIL_FROM_NAME', 'Portal MicroNuba'));
define('MAIL_TO_EMAIL', config_env('MAIL_TO_EMAIL', 'contacto@micronuba.net'));
