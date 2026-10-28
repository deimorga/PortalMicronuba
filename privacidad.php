<?php
require_once 'config/config.php';
?>
<!DOCTYPE html>
<html lang="es" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <?php if (BASE_URL): ?>
        <base href="<?php echo BASE_URL; ?>">
    <?php endif; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Política de Privacidad - MicroNuba</title>
    <meta name="description" content="Política de privacidad de MicroNuba: tratamiento de datos en la integración con WhatsApp Business Platform y en la herramienta interna MicroNuba Respaldos.">
    <link rel="canonical" href="https://micronuba.net/privacidad.php">

    <!-- Open Graph / Twitter Card -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="MicroNuba">
    <meta property="og:locale" content="es_CO">
    <meta property="og:url" content="https://micronuba.net/privacidad.php">
    <meta property="og:title" content="Política de Privacidad - MicroNuba">
    <meta property="og:description" content="Política de privacidad de MicroNuba: tratamiento de datos en la integración con WhatsApp Business Platform y en la herramienta interna MicroNuba Respaldos.">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Política de Privacidad - MicroNuba">
    <meta name="twitter:description" content="Política de privacidad de MicroNuba: tratamiento de datos en la integración con WhatsApp Business Platform y en la herramienta interna MicroNuba Respaldos.">

    <link rel="icon" href="assets/img/micronuba_favicon.png" type="image/png">

    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="assets/css/styles.css?v=<?php echo @filemtime(__DIR__ . '/assets/css/styles.css') ?: time(); ?>">

    <style>
        body {
            background-color: #0f172a;
            color: #f8fafc;
            overflow-x: hidden;
        }

        .tech-bg {
            background-image:
                linear-gradient(to bottom, rgba(15, 23, 42, 0.9), rgba(15, 23, 42, 0.95)),
                url('https://images.unsplash.com/photo-1596496356938-bb9274218ebf?q=80&w=2670&auto=format&fit=crop');
            background-size: cover;
            background-attachment: fixed;
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 0.8s ease-out forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .glass-card {
            background: rgba(30, 41, 59, 0.6);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .title-accent {
            position: relative;
            padding-left: 20px;
        }

        .title-accent::before {
            content: '';
            position: absolute;
            left: 0;
            top: 10%;
            bottom: 10%;
            width: 4px;
            background-color: #06b6d4;
            border-radius: 2px;
        }

        .policy-table th,
        .policy-table td {
            padding: 0.75rem 1rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            text-align: left;
            vertical-align: top;
        }

        .policy-table th {
            width: 35%;
            color: #f8fafc;
            font-weight: 700;
            white-space: nowrap;
        }
        .policy-list {
            list-style: disc;
            padding-left: 1.5rem;
        }

        .policy-list li + li {
            margin-top: 0.4rem;
        }

        [id] {
            scroll-margin-top: 7rem;
        }
    </style>
</head>

<body class="tech-bg font-body">

    <!-- NAV BAR -->
    <nav class="fixed w-full z-50 bg-bgDark/90 backdrop-blur-md border-b border-white/10">
        <div class="max-w-7xl mx-auto px-6 py-3 flex justify-between items-center">
            <!-- BANNER LOGO -->
            <a href="index.php" class="flex items-center group">
                <img src="assets/img/micronuba_horizontal_sin_fondo_Ajus.png" alt="MicroNuba Banner" class="h-logo-90 w-auto object-contain transition-all duration-300 group-hover:scale-105">
            </a>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex gap-6 text-sm font-semibold items-center whitespace-nowrap">
                <a href="index.php#nosotros" class="hover:text-accent transition-colors">Nosotros</a>
                <a href="index.php#servicios" class="hover:text-accent transition-colors">Servicios</a>

                <!-- Productos SaaS Dropdown -->
                <div class="relative">
                    <button id="saas-menu-button" data-dropdown-toggle="saas-menu" aria-expanded="false" aria-haspopup="true" class="hover:text-accent transition-colors flex items-center gap-2 outline-none">
                        Productos SaaS <i class="fa-solid fa-chevron-down text-xs transition-transform duration-300 dropdown-chevron"></i>
                    </button>
                    <div id="saas-menu" class="absolute top-full left-1/2 -translate-x-1/2 mt-4 w-64 opacity-0 invisible transition-all duration-300 transform translate-y-2 z-50">
                        <div class="bg-bgCard/95 backdrop-blur-xl border border-white/10 rounded-xl shadow-2xl overflow-hidden p-2">
                            <div class="px-4 py-2 text-xs font-bold text-textMuted uppercase tracking-wider mb-1">Nuestros productos</div>
                            <a href="plagie.php" class="flex items-start gap-3 px-4 py-3 rounded-lg hover:bg-white/5 group/item transition-colors">
                                <div class="mt-1 w-8 h-8 rounded-lg bg-accent/10 flex items-center justify-center group-hover/item:bg-accent/20 transition-colors shrink-0">
                                    <img src="assets/img/icons/plagie_isotipo.png" alt="PLAGIE" class="w-5 h-5 object-contain">
                                </div>
                                <div>
                                    <span class="block font-bold text-white group-hover/item:text-accent transition-colors">PLAGIE</span>
                                    <span class="block text-xs text-textMuted mt-0.5">Gestión Integral Educativa</span>
                                </div>
                            </a>
                            <a href="appits.php" class="flex items-start gap-3 px-4 py-3 rounded-lg hover:bg-white/5 group/item transition-colors">
                                <div class="mt-1 w-8 h-8 rounded-lg bg-accent/10 flex items-center justify-center group-hover/item:bg-accent/20 transition-colors shrink-0">
                                    <img src="assets/img/icons/appits_isotipo.png" alt="Appits" class="w-5 h-5 object-contain">
                                </div>
                                <div>
                                    <span class="block font-bold text-white group-hover/item:text-accent transition-colors">Appits</span>
                                    <span class="block text-xs text-textMuted mt-0.5">Talleres y Lavaderos</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <span class="w-px h-5 bg-white/10"></span>

                <a href="index.php#contacto" class="text-textMuted hover:text-accent transition-colors font-medium">Contáctanos</a>
                <a href="https://wa.me/573203543092?text=Hola%2C%20vengo%20desde%20el%20portal%20de%20MicroNuba%20y%20quisiera%20saber%20m%C3%A1s%20de%20sus%20servicios." target="_blank" class="flex items-center justify-center w-9 h-9 rounded-full bg-[#25D366]/10 border border-[#25D366]/30 text-[#25D366] hover:bg-[#25D366] hover:text-white transition-all shrink-0" aria-label="Escríbenos por WhatsApp">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
                <a href="cotizar.php" class="bg-accent hover:bg-accentHover text-bgDark px-5 py-2 rounded-lg font-bold transition-all">Cotizar</a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-open" class="lg:hidden text-white p-2 focus:outline-none" aria-label="Abrir menú">
                <i class="fa-solid fa-bars-staggered text-2xl"></i>
            </button>
        </div>
    </nav>

    <!-- MOBILE MENU OVERLAY -->
    <div id="mobile-menu" class="fixed inset-0 z-[60] bg-bgDark/95 backdrop-blur-2xl invisible opacity-0 transition-all duration-500 lg:hidden">
        <div class="flex justify-between items-center p-6 border-b border-white/10">
            <img src="assets/img/micronuba_logo_horizontal.png" alt="MicroNuba" class="h-10">
            <button id="mobile-menu-close" class="text-white p-2 focus:outline-none" aria-label="Cerrar menú">
                <i class="fa-solid fa-xmark text-3xl"></i>
            </button>
        </div>
        <div class="flex flex-col gap-6 p-8 text-center h-full justify-center -mt-20">
            <a href="index.php#nosotros" class="mobile-link text-3xl font-display font-bold hover:text-accent transition-all">Nosotros</a>
            <a href="index.php#servicios" class="mobile-link text-3xl font-display font-bold hover:text-accent transition-all">Servicios</a>
            <a href="plagie.php" class="mobile-link text-3xl font-display font-bold hover:text-accent transition-all">PLAGIE</a>
            <a href="appits.php" class="mobile-link text-3xl font-display font-bold hover:text-accent transition-all">Appits</a>
            <a href="index.php#contacto" class="mobile-link text-3xl font-display font-bold hover:text-accent transition-all">Contáctanos</a>
            <a href="https://wa.me/573203543092?text=Hola%2C%20vengo%20desde%20el%20portal%20de%20MicroNuba%20y%20quisiera%20saber%20m%C3%A1s%20de%20sus%20servicios." target="_blank" class="mobile-link text-2xl font-display font-bold text-[#25D366] transition-all flex items-center justify-center gap-3">
                <i class="fa-brands fa-whatsapp"></i> WhatsApp
            </a>
            <div class="pt-8">
                <a href="cotizar.php" class="bg-accent text-bgDark px-10 py-5 rounded-full font-bold text-2xl shadow-lg shadow-accent/20 active:scale-95 transition-all inline-block w-full">
                    Cotizar
                </a>
            </div>
        </div>
    </div>

    <!-- HEADER / HERO SECTION -->
    <header class="relative pt-40 pb-16 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-bgDark/50 to-bgDark"></div>
        <div class="container mx-auto px-6 relative z-10 text-center max-w-3xl">
            <h1 class="text-4xl md:text-5xl font-bold font-display text-white mb-4 fade-in">
                Política de Privacidad
            </h1>
            <p class="text-textMuted fade-in">
                MICRONUBA S.A.S. — cómo tratamos los datos personales en nuestra integración con WhatsApp Business Platform y en nuestras herramientas internas que usan servicios de Google.
            </p>
        </div>
    </header>

    <!-- CONTENT SECTION -->
    <section class="pb-24 bg-bgDark relative">
        <div class="container mx-auto px-6 max-w-3xl space-y-8">

            <!-- 1. Responsable -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">1. Responsable del tratamiento</h2>
                <p class="text-textMuted leading-relaxed">
                    El responsable del tratamiento de los datos descritos en esta política es <strong class="text-white">MICRONUBA S.A.S.</strong>, identificada con NIT <strong class="text-white">902006565-9</strong>, con domicilio en <strong class="text-white">Carrera 70 A # 79-34</strong>, Bogotá D.C., Colombia. Para cualquier consulta, solicitud o ejercicio de derechos relacionados con esta política, puede escribirnos a
                    <a href="mailto:contacto@micronuba.net" class="text-accent hover:underline">contacto@micronuba.net</a>.
                </p>
            </div>

            <!-- 2. Alcance -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">2. Aplicaciones descritas en esta política</h2>
                <ul class="text-textMuted leading-relaxed policy-list">
                    <li><a href="privacidad.php#whatsapp" class="text-accent hover:underline">Integración de WhatsApp de MicroNuba</a> (secciones 3 a 10): conecta las cuentas de WhatsApp Business de las empresas que usan nuestros productos de software, para que envíen y reciban mensajes desde ellos.</li>
                    <li><a href="privacidad.php#respaldos" class="text-accent hover:underline">MicroNuba Respaldos</a> (secciones 11 a 15): herramienta interna que guarda copias de seguridad de nuestra infraestructura en Google Drive.</li>
                </ul>
            </div>

            <!-- ===================== WHATSAPP ===================== -->

            <!-- 3. Integración de WhatsApp -->
            <div id="whatsapp" class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">3. Integración de WhatsApp de MicroNuba</h2>
                <p class="text-textMuted leading-relaxed mb-6">
                    Las empresas que usan los productos de software de MicroNuba (por ejemplo, gimnasios, colegios o talleres) pueden conectar su propia cuenta de WhatsApp Business a nuestra plataforma mediante el proceso de registro de Meta (<em>Embedded Signup</em>). A partir de ese momento, nuestra plataforma envía y recibe mensajes de WhatsApp en nombre de esa empresa, a través de la <strong class="text-white">WhatsApp Business Platform</strong> de Meta.
                </p>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm policy-table">
                        <tbody>
                            <tr>
                                <th>Nombre de la aplicación en Meta</th>
                                <td class="text-textMuted">MicroNuba Mensajería</td>
                            </tr>
                            <tr>
                                <th>Quién la usa</th>
                                <td class="text-textMuted">Las empresas clientes de MicroNuba que conectan su propia cuenta de WhatsApp Business. Cada empresa usa su propio número y paga directamente a Meta los mensajes que envía.</td>
                            </tr>
                            <tr>
                                <th>Permisos solicitados a Meta</th>
                                <td class="text-textMuted"><code class="text-accent">whatsapp_business_management</code> y <code class="text-accent">whatsapp_business_messaging</code>, únicamente.</td>
                            </tr>
                            <tr>
                                <th>Qué implican esos permisos</th>
                                <td class="text-textMuted">Acceder a la cuenta de WhatsApp Business, a los números y a las plantillas de mensaje <strong class="text-white">que la empresa autoriza</strong> durante el registro, y enviar y recibir mensajes con ellos. No accedemos al perfil personal de Facebook de quien hace el registro, ni a sus contactos, publicaciones o páginas.</td>
                            </tr>
                            <tr>
                                <th>Publicidad</th>
                                <td class="text-textMuted">Los datos no se usan para publicidad, perfilado ni venta a terceros.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 4. Roles -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">4. Quién decide sobre los datos</h2>
                <p class="text-textMuted leading-relaxed mb-4">
                    <strong class="text-white">Sobre los datos de las personas que escriben o reciben mensajes</strong> de una empresa cliente, el responsable del tratamiento es esa empresa. Ella decide a quién escribe y con qué finalidad, y debe contar con la autorización de esas personas. MicroNuba actúa como <strong class="text-white">encargado del tratamiento</strong>: trata esos datos solo para prestar el servicio y siguiendo las instrucciones de la empresa.
                </p>
                <p class="text-textMuted leading-relaxed">
                    <strong class="text-white">Sobre los datos de las propias empresas clientes</strong> y de sus usuarios administradores, el responsable es MicroNuba.
                </p>
            </div>

            <!-- 5. Datos tratados -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">5. Datos que tratamos</h2>
                <p class="text-textMuted leading-relaxed mb-3"><strong class="text-white">De la empresa cliente:</strong></p>
                <ul class="text-textMuted leading-relaxed policy-list mb-6">
                    <li>nombre del negocio y datos de contacto de sus usuarios administradores;</li>
                    <li>identificadores de su cuenta de WhatsApp Business y de sus números de teléfono;</li>
                    <li>plantillas de mensaje y su estado de aprobación;</li>
                    <li>el token de acceso que Meta emite para operar su cuenta, que guardamos cifrado.</li>
                </ul>
                <p class="text-textMuted leading-relaxed mb-3"><strong class="text-white">De las personas que se comunican con la empresa:</strong></p>
                <ul class="text-textMuted leading-relaxed policy-list">
                    <li>número de teléfono e identificador de WhatsApp, y el nombre de perfil que muestra WhatsApp;</li>
                    <li>contenido de los mensajes enviados y recibidos: texto, imágenes, documentos, audio y otros archivos;</li>
                    <li>estado de cada mensaje (enviado, entregado, leído o fallido) y la fecha y hora;</li>
                    <li>la solicitud de no recibir más mensajes de la empresa, cuando la persona la hace.</li>
                </ul>
            </div>

            <!-- 6. Finalidad -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">6. Para qué los usamos</h2>
                <ul class="text-textMuted leading-relaxed policy-list mb-4">
                    <li>enviar los mensajes que la empresa cliente ordena desde nuestros productos, como recibos, recordatorios y avisos;</li>
                    <li>recibir los mensajes que las personas envían a la empresa y entregarlos al producto de MicroNuba que la empresa usa;</li>
                    <li>informar a la empresa del estado de sus mensajes y de sus plantillas;</li>
                    <li>respetar las solicitudes de no recibir más mensajes;</li>
                    <li>mantener la seguridad del servicio, prevenir abusos y atender solicitudes de soporte.</li>
                </ul>
                <p class="text-textMuted leading-relaxed">
                    No usamos estos datos para publicidad, perfilado ni entrenamiento de modelos de inteligencia artificial, y no los vendemos.
                </p>
            </div>

            <!-- 7. Con quién se comparten -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">7. Con quién se comparten</h2>
                <ul class="text-textMuted leading-relaxed policy-list">
                    <li><strong class="text-white">Meta Platforms (WhatsApp):</strong> todos los mensajes pasan por la WhatsApp Business Platform, que trata los datos según sus propias condiciones y su <a href="https://www.whatsapp.com/legal/privacy-policy" target="_blank" class="text-accent hover:underline">política de privacidad</a>.</li>
                    <li><strong class="text-white">La empresa cliente:</strong> recibe en su producto los mensajes y estados de su propia cuenta. Nunca los de otra empresa.</li>
                    <li><strong class="text-white">Proveedores de infraestructura</strong> (alojamiento del servidor y servicios de red), que solo almacenan o transportan los datos bajo obligaciones de confidencialidad.</li>
                    <li><strong class="text-white">Autoridades</strong>, cuando una norma o una orden judicial lo exija.</li>
                </ul>
                <p class="text-textMuted leading-relaxed mt-4">
                    Los servidores de Meta y de algunos proveedores pueden estar fuera de Colombia, lo que implica una transferencia internacional de datos.
                </p>
            </div>

            <!-- 8. Conservación -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">8. Cuánto tiempo los conservamos</h2>
                <ul class="text-textMuted leading-relaxed policy-list">
                    <li><strong class="text-white">Contenido de los mensajes y archivos multimedia:</strong> hasta 30 días en nuestra plataforma. Después de ese plazo solo los conserva el producto de la empresa cliente, según sus propias reglas.</li>
                    <li><strong class="text-white">Registros de envío y estado</strong> (sin el contenido): hasta 12 meses, para soporte y auditoría.</li>
                    <li><strong class="text-white">Token de acceso y configuración de la empresa:</strong> mientras la integración esté activa. Se eliminan en un plazo de 30 días desde que la empresa la desconecta.</li>
                    <li><strong class="text-white">Solicitudes de supresión:</strong> guardamos una huella irreversible del número, sin el número en claro, como prueba de que la solicitud se atendió.</li>
                </ul>
            </div>

            <!-- 9. Seguridad -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">9. Cómo los protegemos</h2>
                <p class="text-textMuted leading-relaxed">
                    Las comunicaciones viajan cifradas (HTTPS). Los tokens de acceso se guardan cifrados. Comprobamos la firma de Meta en cada notificación que recibimos. Los datos de cada empresa están separados de los de las demás, y solo el personal técnico autorizado de MicroNuba puede acceder a ellos, para tareas de operación y soporte.
                </p>
            </div>

            <!-- 10. Eliminación de datos -->
            <div id="eliminacion-de-datos" class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">10. Cómo solicitar la eliminación de sus datos</h2>
                <p class="text-textMuted leading-relaxed mb-3"><strong class="text-white">Si es una empresa cliente:</strong></p>
                <ul class="text-textMuted leading-relaxed policy-list mb-6">
                    <li>escriba a <a href="mailto:contacto@micronuba.net" class="text-accent hover:underline">contacto@micronuba.net</a> desde el correo de un administrador de la cuenta, pidiendo la desconexión y la eliminación de sus datos; o</li>
                    <li>retire el acceso de nuestra aplicación desde la configuración de su portfolio comercial en Meta Business Suite, en la sección de integraciones o aplicaciones conectadas. Al recibir el aviso de Meta, eliminamos sus datos en los plazos de la sección 8.</li>
                </ul>
                <p class="text-textMuted leading-relaxed mb-3"><strong class="text-white">Si ha intercambiado mensajes con una de esas empresas:</strong></p>
                <ul class="text-textMuted leading-relaxed policy-list">
                    <li>puede pedir a la empresa que deje de escribirle, o bloquearla desde WhatsApp;</li>
                    <li>puede pedir la eliminación de sus datos a la empresa, o escribirnos a <a href="mailto:contacto@micronuba.net" class="text-accent hover:underline">contacto@micronuba.net</a> indicando su número y el nombre de la empresa. Coordinamos la solicitud con ella y respondemos en un máximo de 15 días hábiles.</li>
                </ul>
            </div>

            <!-- ===================== RESPALDOS ===================== -->

            <!-- 11. Aplicación MicroNuba Respaldos -->
            <div id="respaldos" class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">11. MicroNuba Respaldos</h2>
                <p class="text-textMuted leading-relaxed mb-6">
                    <strong class="text-white">MicroNuba Respaldos</strong> es una aplicación interna que utiliza la API de Google para almacenar copias de seguridad de la infraestructura propia de MicroNuba.
                </p>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm policy-table">
                        <tbody>
                            <tr>
                                <th>Nombre</th>
                                <td class="text-textMuted">MicroNuba Respaldos</td>
                            </tr>
                            <tr>
                                <th>Qué hace</th>
                                <td class="text-textMuted">Sube copias de seguridad cifradas de la infraestructura propia de MicroNuba al Google Drive de la empresa.</td>
                            </tr>
                            <tr>
                                <th>Permiso solicitado</th>
                                <td class="text-textMuted"><code class="text-accent">https://www.googleapis.com/auth/drive.file</code> únicamente.</td>
                            </tr>
                            <tr>
                                <th>Qué implica ese permiso</th>
                                <td class="text-textMuted">La aplicación solo puede ver y modificar <strong class="text-white">los archivos que ella misma crea</strong>. No puede leer, listar ni modificar ningún otro archivo o carpeta del Drive de la cuenta.</td>
                            </tr>
                            <tr>
                                <th>Quién la usa</th>
                                <td class="text-textMuted">Únicamente el administrador de MicroNuba. No hay usuarios externos ni clientes con acceso a esta aplicación.</td>
                            </tr>
                            <tr>
                                <th>Cifrado</th>
                                <td class="text-textMuted">Los respaldos se cifran con <code class="text-accent">restic</code> antes de salir del servidor de origen.</td>
                            </tr>
                            <tr>
                                <th>Terceros</th>
                                <td class="text-textMuted">Los datos accedidos no se comparten, venden ni ceden a terceros bajo ninguna circunstancia.</td>
                            </tr>
                            <tr>
                                <th>Publicidad</th>
                                <td class="text-textMuted">No se usan para publicidad ni para perfilado de ningún tipo.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 12. Finalidad -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">12. Datos que accede MicroNuba Respaldos y para qué</h2>
                <p class="text-textMuted leading-relaxed">
                    El único dato al que accede MicroNuba Respaldos son los <strong class="text-white">archivos creados por la propia aplicación</strong> en el Google Drive corporativo de MicroNuba — es decir, los archivos de respaldo que ella misma sube. La aplicación no tiene visibilidad ni acceso a ningún otro archivo, carpeta o dato de la cuenta de Google. La única finalidad de este acceso es el <strong class="text-white">almacenamiento de copias de seguridad cifradas de la infraestructura propia</strong> de la empresa, como mecanismo de continuidad operativa ante fallas o pérdidas de datos.
                </p>
            </div>

            <!-- 13. No se comparte -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">13. Que no se comparte con terceros</h2>
                <p class="text-textMuted leading-relaxed">
                    MicroNuba no comparte, vende, alquila ni cede a terceros los datos a los que accede esta aplicación, ni los utiliza con fines publicitarios o de perfilado. El acceso está limitado exclusivamente al personal técnico autorizado de MicroNuba para labores de administración de la infraestructura.
                </p>
            </div>

            <!-- 14. Conservación -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">14. Conservación y eliminación de los respaldos</h2>
                <p class="text-textMuted leading-relaxed mb-4">
                    Los respaldos almacenados se conservan de acuerdo con la política interna de retención de MicroNuba y se eliminan automáticamente al expirar dicho periodo. En ningún caso se conservan más allá del tiempo necesario para cumplir su finalidad de continuidad operativa.
                </p>
                <p class="text-textMuted leading-relaxed">
                    El acceso otorgado a MicroNuba Respaldos sobre una cuenta de Google puede revocarse en cualquier momento, de forma independiente y directa, desde
                    <a href="https://myaccount.google.com/permissions" target="_blank" class="text-accent hover:underline">myaccount.google.com/permissions</a>.
                </p>
            </div>

            <!-- 15. Google API Services User Data Policy -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">15. Cumplimiento de la Google API Services User Data Policy</h2>
                <p class="text-textMuted leading-relaxed mb-4">
                    El uso que MicroNuba hace de la información recibida a través de las APIs de Google cumple con la <a href="https://developers.google.com/terms/api-services-user-data-policy" target="_blank" class="text-accent hover:underline">Google API Services User Data Policy</a>, incluidos los requisitos de uso limitado (<em>Limited Use</em>).
                </p>
                <p class="text-textMuted leading-relaxed text-sm border-l-2 border-accent/40 pl-4 italic">
                    MicroNuba's use of information received from Google APIs will adhere to the Google API Services User Data Policy, including the Limited Use requirements.
                </p>
            </div>

            <!-- ===================== GENERAL ===================== -->

            <!-- 16. Derechos del titular -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">16. Derechos del titular</h2>
                <p class="text-textMuted leading-relaxed">
                    Como titular de los datos, usted tiene derecho a conocer, actualizar, rectificar y solicitar la supresión de su información, así como a revocar la autorización otorgada, escribiendo a
                    <a href="mailto:contacto@micronuba.net" class="text-accent hover:underline">contacto@micronuba.net</a>. Atendemos las consultas en un máximo de 10 días hábiles y los reclamos en un máximo de 15 días hábiles.
                </p>
            </div>

            <!-- 17. Normatividad -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">17. Normatividad aplicable</h2>
                <p class="text-textMuted leading-relaxed">
                    El tratamiento de datos personales descrito en esta política se rige por la <strong class="text-white">Ley 1581 de 2012</strong> de protección de datos personales de Colombia y sus decretos reglamentarios.
                </p>
            </div>

            <!-- 18. Contacto y actualización -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">18. Contacto</h2>
                <p class="text-textMuted leading-relaxed mb-6">
                    Ante cualquier duda sobre esta política o sobre el tratamiento de sus datos, puede contactarnos en
                    <a href="mailto:contacto@micronuba.net" class="text-accent hover:underline">contacto@micronuba.net</a>. Las condiciones de uso de nuestros servicios están en los <a href="terminos.php" class="text-accent hover:underline">Términos de Servicio</a>.
                </p>
                <p class="text-textMuted text-sm">
                    Última actualización: <strong class="text-white">28 de octubre de 2026</strong>.
                </p>
            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-bgCard border-t border-white/10 pt-16 pb-8">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-12 mb-12">
                <div class="col-span-1 md:col-span-2">
                    <img src="assets/img/micronuba_horizontal_sin_fondo_Ajus.png" alt="MicroNuba" class="h-10 mb-6 object-contain">
                    <p class="text-textMuted text-sm leading-relaxed mb-6">
                        Transformemos tu futuro hoy mismo.
                    </p>
                    <div class="flex gap-6">
                        <a href="https://www.facebook.com/profile.php?id=61585605239590" target="_blank" class="text-[#1877F2] hover:opacity-80 hover:scale-110 text-2xl transition-all"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com/micro_nuba/" target="_blank" class="text-[#E4405F] hover:opacity-80 hover:scale-110 text-2xl transition-all"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://wa.me/573203543092?text=Hola%2C%20vengo%20desde%20el%20portal%20de%20MicroNuba%20y%20quisiera%20saber%20m%C3%A1s%20de%20sus%20servicios." target="_blank" class="text-[#25D366] hover:opacity-80 hover:scale-110 text-2xl transition-all"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6">Enlaces Rápidos</h4>
                    <ul class="space-y-3 text-sm text-textMuted">
                        <li><a href="index.php" class="hover:text-accent transition-colors">Inicio</a></li>
                        <li><a href="index.php#servicios" class="hover:text-accent transition-colors">Servicios</a></li>
                        <li><a href="index.php#saas" class="hover:text-accent transition-colors">Productos SaaS</a></li>
                        <li><a href="cotizar.php" class="hover:text-accent transition-colors">Cotizar</a></li>
                        <li><a href="privacidad.php" class="hover:text-accent transition-colors">Política de Privacidad</a></li>
                        <li><a href="terminos.php" class="hover:text-accent transition-colors">Términos de Servicio</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-bold mb-6">Contacto</h4>
                    <ul class="space-y-3 text-sm text-textMuted">
                        <li><i class="fa-solid fa-envelope mr-2 text-accent"></i> contacto@micronuba.net</li>
                        <li><i class="fa-solid fa-location-dot mr-2 text-accent"></i> Bogotá, Colombia</li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-white/10 pt-8 text-center">
                <p class="text-xs text-textMuted">
                    &copy; <?php echo date('Y'); ?> MICRONUBA S.A.S. · NIT 902006565-9. Todos los derechos reservados.
                </p>
            </div>
        </div>
    </footer>

    <script>
        // Lógica de Menús Dropdown (Accesibilidad) — soporta varios dropdowns en el nav
        const dropdowns = [...document.querySelectorAll('[data-dropdown-toggle]')].map((btn) => {
            const menu = document.getElementById(btn.dataset.dropdownToggle);
            const chevron = btn.querySelector('.dropdown-chevron');

            const toggleMenu = (show) => {
                const isVisible = show !== undefined ? show : menu.classList.contains('invisible');
                if (isVisible) {
                    menu.classList.remove('opacity-0', 'invisible', 'translate-y-2');
                    btn.setAttribute('aria-expanded', 'true');
                    chevron?.classList.add('rotate-180');
                } else {
                    menu.classList.add('opacity-0', 'invisible', 'translate-y-2');
                    btn.setAttribute('aria-expanded', 'false');
                    chevron?.classList.remove('rotate-180');
                }
            };

            btn.addEventListener('click', (e) => {
                e.stopPropagation();
                dropdowns.filter(d => d.toggleMenu !== toggleMenu).forEach(d => d.toggleMenu(false));
                toggleMenu();
            });
            menu.addEventListener('click', (e) => e.stopPropagation());

            return { toggleMenu };
        });

        document.addEventListener('click', () => dropdowns.forEach(d => d.toggleMenu(false)));
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') dropdowns.forEach(d => d.toggleMenu(false));
        });

        // Lógica del Menú Móvil
        const mobileMenu = document.getElementById('mobile-menu');
        const openBtn = document.getElementById('mobile-menu-open');
        const closeBtn = document.getElementById('mobile-menu-close');
        const mobileLinks = document.querySelectorAll('.mobile-link');

        const toggleMobileMenu = (show) => {
            if (show) {
                mobileMenu.classList.remove('invisible', 'opacity-0');
                document.body.style.overflow = 'hidden';
                openBtn.setAttribute('aria-expanded', 'true');
            } else {
                mobileMenu.classList.add('invisible', 'opacity-0');
                document.body.style.overflow = '';
                openBtn.setAttribute('aria-expanded', 'false');
            }
        };

        openBtn.addEventListener('click', () => toggleMobileMenu(true));
        closeBtn.addEventListener('click', () => toggleMobileMenu(false));
        mobileLinks.forEach(link => link.addEventListener('click', () => toggleMobileMenu(false)));
    </script>
</body>

</html>
