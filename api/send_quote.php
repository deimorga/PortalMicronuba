<?php
// Iniciar buffer de salida para evitar que warnings/notices rompan el JSON
ob_start();

header('Content-Type: application/json');

// Cargar Configuración
require_once '../config/config.php';

// Cargar PHPMailer (Manual sin Composer)
require '../lib/PHPMailer/src/Exception.php';
require '../lib/PHPMailer/src/PHPMailer.php';
require '../lib/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Función para sanitizar inputs
function sanitize($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // 1. Capturar y sanitizar datos
        $name = sanitize($_POST['name'] ?? '');
        $company = sanitize($_POST['company'] ?? '');
        $email = sanitize($_POST['email'] ?? '');
        $phone = sanitize($_POST['phone'] ?? '');
        
        $project_type = sanitize($_POST['project_type'] ?? '');
        $project_name = sanitize($_POST['project_name'] ?? '');
        $description = sanitize($_POST['description'] ?? '');
        $objectives = sanitize($_POST['objectives'] ?? '');
        
        $budget = sanitize($_POST['budget'] ?? '');
        $start_date = sanitize($_POST['start_date'] ?? '');

        // 2. Validaciones básicas
        if (empty($name) || empty($email) || empty($phone) || empty($description)) {
            throw new Exception("Por favor completa los campos obligatorios.");
        }

        // 3. Construir el contenido del correo (Plantilla HTML Profesional)
        $message = '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Nueva Cotización - MicroNuba</title>
        </head>
        <body style="margin: 0; padding: 0; font-family: \'Arial\', sans-serif; background-color: #f1f5f9;">
            <table role="presentation" style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td align="center" style="padding: 40px 0;">
                        <table role="presentation" style="width: 600px; border-collapse: collapse; background-color: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
                            
                            <!-- HEADER -->
                            <tr>
                                <td style="background-color: #0f172a; padding: 40px; text-align: center;">
                                    <h1 style="color: #ffffff; margin: 0; font-size: 24px; font-weight: bold;">Micro<span style="color: #06b6d4;">Nuba</span></h1>
                                    <p style="color: #94a3b8; margin: 10px 0 0 0; font-size: 14px;">Nueva Solicitud de Cotización</p>
                                </td>
                            </tr>

                            <!-- BODY -->
                            <tr>
                                <td style="padding: 40px;">
                                    
                                    <!-- CLIENTE -->
                                    <div style="margin-bottom: 30px;">
                                        <h2 style="color: #0f172a; font-size: 18px; border-bottom: 2px solid #e2e8f0; padding-bottom: 10px; margin-bottom: 20px;">👤 Información del Cliente</h2>
                                        <table style="width: 100%;">
                                            <tr>
                                                <td style="padding: 8px 0; color: #64748b; width: 120px;">Nombre:</td>
                                                <td style="padding: 8px 0; color: #0f172a; font-weight: 600;">' . $name . '</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0; color: #64748b;">Empresa:</td>
                                                <td style="padding: 8px 0; color: #0f172a; font-weight: 600;">' . ($company ? $company : 'N/A') . '</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0; color: #64748b;">Email:</td>
                                                <td style="padding: 8px 0; color: #0f172a; font-weight: 600;">' . $email . '</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0; color: #64748b;">Teléfono:</td>
                                                <td style="padding: 8px 0; color: #0f172a; font-weight: 600;">' . $phone . '</td>
                                            </tr>
                                        </table>
                                    </div>

                                    <!-- PROYECTO -->
                                    <div style="margin-bottom: 30px;">
                                        <h2 style="color: #0f172a; font-size: 18px; border-bottom: 2px solid #e2e8f0; padding-bottom: 10px; margin-bottom: 20px;">🚀 Detalles del Proyecto</h2>
                                        <table style="width: 100%;">
                                            <tr>
                                                <td style="padding: 8px 0; color: #64748b; width: 120px;">Tipo:</td>
                                                <td style="padding: 8px 0; color: #06b6d4; font-weight: bold;">' . $project_type . '</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0; color: #64748b;">Nombre:</td>
                                                <td style="padding: 8px 0; color: #0f172a; font-weight: 600;">' . ($project_name ? $project_name : 'Sin nombre') . '</td>
                                            </tr>
                                        </table>
                                        
                                        <div style="background-color: #f8fafc; padding: 20px; border-radius: 8px; margin-top: 15px;">
                                            <p style="color: #64748b; font-size: 12px; margin: 0 0 5px 0; text-transform: uppercase; letter-spacing: 1px;">Descripción</p>
                                            <p style="color: #334155; margin: 0; line-height: 1.6;">' . nl2br($description) . '</p>
                                        </div>

                                        ' . ($objectives ? '
                                        <div style="background-color: #f8fafc; padding: 20px; border-radius: 8px; margin-top: 15px;">
                                            <p style="color: #64748b; font-size: 12px; margin: 0 0 5px 0; text-transform: uppercase; letter-spacing: 1px;">Objetivos</p>
                                            <p style="color: #334155; margin: 0; line-height: 1.6;">' . nl2br($objectives) . '</p>
                                        </div>' : '') . '
                                    </div>

                                    <!-- PRESUPUESTO -->
                                    <div>
                                        <h2 style="color: #0f172a; font-size: 18px; border-bottom: 2px solid #e2e8f0; padding-bottom: 10px; margin-bottom: 20px;">💰 Presupuesto y Tiempos</h2>
                                        <table style="width: 100%;">
                                            <tr>
                                                <td style="padding: 8px 0; color: #64748b; width: 120px;">Rango:</td>
                                                <td style="padding: 8px 0; color: #0f172a; font-weight: 600;">' . ($budget ? $budget : 'No especificado') . '</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0; color: #64748b;">Inicio Estimado:</td>
                                                <td style="padding: 8px 0; color: #0f172a; font-weight: 600;">' . ($start_date ? $start_date : 'No especificado') . '</td>
                                            </tr>
                                        </table>
                                    </div>

                                </td>
                            </tr>

                            <!-- FOOTER -->
                            <tr>
                                <td style="background-color: #f1f5f9; padding: 20px; text-align: center; color: #94a3b8; font-size: 12px;">
                                    <p style="margin: 0;">Este correo fue enviado desde el formulario de cotización de MicroNuba.</p>
                                    <p style="margin: 5px 0 0 0;">&copy; ' . date("Y") . ' MicroNuba SAS.</p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </body>
        </html>
        ';

        // 4. Configurar PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host       = SMTP_HOST;
            $mail->SMTPAuth   = true;
            $mail->Username   = SMTP_USER;
            $mail->Password   = SMTP_PASS;
            $mail->SMTPSecure = SMTP_SECURE; // tls o ssl
            $mail->Port       = SMTP_PORT;
            $mail->CharSet    = 'UTF-8';

            // Recipients
            $mail->setFrom(MAIL_FROM_EMAIL, MAIL_FROM_NAME);
            $mail->addAddress(MAIL_TO_EMAIL);
            $mail->addReplyTo($email, $name); // Responder al cliente

            // Content
            $mail->isHTML(true);
            $mail->Subject = "Nueva Solicitud de Cotización: " . ($project_name ? $project_name : "Sin nombre");
            $mail->Body    = $message;
            $mail->AltBody = strip_tags($message); // Versión texto plano

            $mail->send();
            
            // Log de éxito
            file_put_contents('../logs/email_log.txt', "--- ENVIADO POR SMTP [" . date('Y-m-d H:i:s') . "] ---\nTo: " . MAIL_TO_EMAIL . "\n\n", FILE_APPEND);
            
            ob_clean(); // Limpiar cualquier salida previa
            echo json_encode(['success' => true, 'message' => 'Solicitud enviada correctamente.']);
        } catch (Exception $e) {
            // Fallback: Si falla SMTP, guardamos en log y avisamos error
            $errorMsg = "Error SMTP: {$mail->ErrorInfo}";
            file_put_contents('../logs/email_log.txt', "--- ERROR SMTP [" . date('Y-m-d H:i:s') . "] ---\n$errorMsg\n\n", FILE_APPEND);
            throw new Exception("No se pudo enviar el correo. Por favor contacta a soporte.");
        }

    } catch (Exception $e) {
        http_response_code(400);
        ob_clean(); // Limpiar cualquier salida previa
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
} else {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Método no permitido']);
}
?>
