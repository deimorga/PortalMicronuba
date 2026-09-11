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
    <meta name="description" content="Política de privacidad de MicroNuba: cómo tratamos los datos personales y el acceso a Google Drive de la aplicación interna MicroNuba Respaldos.">
    <link rel="canonical" href="https://micronuba.net/privacidad.php">

    <!-- Open Graph / Twitter Card -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="MicroNuba">
    <meta property="og:locale" content="es_CO">
    <meta property="og:url" content="https://micronuba.net/privacidad.php">
    <meta property="og:title" content="Política de Privacidad - MicroNuba">
    <meta property="og:description" content="Política de privacidad de MicroNuba: cómo tratamos los datos personales y el acceso a Google Drive de la aplicación interna MicroNuba Respaldos.">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Política de Privacidad - MicroNuba">
    <meta name="twitter:description" content="Política de privacidad de MicroNuba: cómo tratamos los datos personales y el acceso a Google Drive de la aplicación interna MicroNuba Respaldos.">

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

                <!-- Tools Dropdown -->
                <div class="relative">
                    <button id="tools-menu-button" data-dropdown-toggle="tools-menu" aria-expanded="false" aria-haspopup="true" class="hover:text-accent transition-colors flex items-center gap-2 outline-none">
                        Herramientas <i class="fa-solid fa-chevron-down text-xs transition-transform duration-300 dropdown-chevron"></i>
                    </button>
                    <div id="tools-menu" class="absolute top-full left-1/2 -translate-x-1/2 mt-4 w-64 opacity-0 invisible transition-all duration-300 transform translate-y-2 z-50">
                        <div class="bg-bgCard/95 backdrop-blur-xl border border-white/10 rounded-xl shadow-2xl overflow-hidden p-2">
                            <div class="px-4 py-2 text-xs font-bold text-textMuted uppercase tracking-wider mb-1">Utilidades</div>
                            <a href="tools/Turnos.php" class="flex items-start gap-3 px-4 py-3 rounded-lg hover:bg-white/5 group/item transition-colors">
                                <div class="mt-1 w-8 h-8 rounded-lg bg-accent/10 flex items-center justify-center group-hover/item:bg-accent/20 transition-colors shrink-0">
                                    <i class="fa-solid fa-calendar-days text-accent"></i>
                                </div>
                                <div>
                                    <span class="block font-bold text-white group-hover/item:text-accent transition-colors">Gestor de Turnos</span>
                                    <span class="block text-xs text-textMuted mt-0.5">Planificador 24/7 rotativo</span>
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
            <a href="tools/Turnos.php" class="mobile-link text-3xl font-display font-bold hover:text-accent transition-all">Herramientas</a>
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
                MicroNuba SAS — cómo tratamos los datos personales y de terceros, incluido el acceso a información de Google utilizado por nuestras herramientas internas.
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
                    El responsable del tratamiento de los datos descritos en esta política es <strong class="text-white">MicroNuba SAS</strong>, empresa de tecnología con domicilio en Bogotá, Colombia. Para cualquier consulta, solicitud o ejercicio de derechos relacionados con esta política, puede escribirnos a
                    <a href="mailto:contacto@micronuba.net" class="text-accent hover:underline">contacto@micronuba.net</a>.
                </p>
            </div>

            <!-- 2. Aplicación MicroNuba Respaldos -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">2. Aplicación descrita en esta política</h2>
                <p class="text-textMuted leading-relaxed mb-6">
                    Esta política describe específicamente el tratamiento de datos realizado por <strong class="text-white">MicroNuba Respaldos</strong>, una aplicación interna que utiliza la API de Google para almacenar copias de seguridad de la infraestructura propia de MicroNuba.
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

            <!-- 3. Finalidad -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">3. Datos que se acceden y para qué</h2>
                <p class="text-textMuted leading-relaxed">
                    El único dato al que accede MicroNuba Respaldos son los <strong class="text-white">archivos creados por la propia aplicación</strong> en el Google Drive corporativo de MicroNuba — es decir, los archivos de respaldo que ella misma sube. La aplicación no tiene visibilidad ni acceso a ningún otro archivo, carpeta o dato de la cuenta de Google. La única finalidad de este acceso es el <strong class="text-white">almacenamiento de copias de seguridad cifradas de la infraestructura propia</strong> de la empresa, como mecanismo de continuidad operativa ante fallas o pérdidas de datos.
                </p>
            </div>

            <!-- 4. No se comparte -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">4. Que no se comparte con terceros</h2>
                <p class="text-textMuted leading-relaxed">
                    MicroNuba no comparte, vende, alquila ni cede a terceros los datos a los que accede esta aplicación, ni los utiliza con fines publicitarios o de perfilado. El acceso está limitado exclusivamente al personal técnico autorizado de MicroNuba para labores de administración de la infraestructura.
                </p>
            </div>

            <!-- 5. Conservación -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">5. Conservación y eliminación</h2>
                <p class="text-textMuted leading-relaxed">
                    Los respaldos almacenados se conservan de acuerdo con la política interna de retención de MicroNuba y se eliminan automáticamente al expirar dicho periodo. En ningún caso se conservan más allá del tiempo necesario para cumplir su finalidad de continuidad operativa.
                </p>
            </div>

            <!-- 6. Derechos del titular -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">6. Derechos del titular y revocación del acceso</h2>
                <p class="text-textMuted leading-relaxed mb-4">
                    Como titular de los datos, usted tiene derecho a conocer, actualizar, rectificar y solicitar la supresión de su información, así como a revocar la autorización otorgada, escribiendo a
                    <a href="mailto:contacto@micronuba.net" class="text-accent hover:underline">contacto@micronuba.net</a>.
                </p>
                <p class="text-textMuted leading-relaxed">
                    El acceso otorgado a MicroNuba Respaldos sobre una cuenta de Google puede revocarse en cualquier momento, de forma independiente y directa, desde
                    <a href="https://myaccount.google.com/permissions" target="_blank" class="text-accent hover:underline">myaccount.google.com/permissions</a>.
                </p>
            </div>

            <!-- 7. Normatividad -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">7. Normatividad aplicable</h2>
                <p class="text-textMuted leading-relaxed">
                    El tratamiento de datos personales descrito en esta política se rige por la <strong class="text-white">Ley 1581 de 2012</strong> de protección de datos personales de Colombia y sus decretos reglamentarios.
                </p>
            </div>

            <!-- 8. Google API Services User Data Policy -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">8. Cumplimiento de la Google API Services User Data Policy</h2>
                <p class="text-textMuted leading-relaxed mb-4">
                    El uso que MicroNuba hace de la información recibida a través de las APIs de Google cumple con la <a href="https://developers.google.com/terms/api-services-user-data-policy" target="_blank" class="text-accent hover:underline">Google API Services User Data Policy</a>, incluidos los requisitos de uso limitado (<em>Limited Use</em>).
                </p>
                <p class="text-textMuted leading-relaxed text-sm border-l-2 border-accent/40 pl-4 italic">
                    MicroNuba's use of information received from Google APIs will adhere to the Google API Services User Data Policy, including the Limited Use requirements.
                </p>
            </div>

            <!-- 9. Contacto y actualización -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">9. Contacto</h2>
                <p class="text-textMuted leading-relaxed mb-6">
                    Ante cualquier duda sobre esta política o sobre el tratamiento de sus datos, puede contactarnos en
                    <a href="mailto:contacto@micronuba.net" class="text-accent hover:underline">contacto@micronuba.net</a>.
                </p>
                <p class="text-textMuted text-sm">
                    Última actualización: <strong class="text-white">11 de septiembre de 2026</strong>.
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
                    &copy; <?php echo date('Y'); ?> MicroNuba. Todos los derechos reservados.
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
