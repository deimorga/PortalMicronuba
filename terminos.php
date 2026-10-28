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
    <title>Términos de Servicio - MicroNuba</title>
    <meta name="description" content="Términos de servicio de MicroNuba: condiciones de uso de sus productos de software y de la integración con WhatsApp.">
    <link rel="canonical" href="https://micronuba.net/terminos.php">

    <!-- Open Graph / Twitter Card -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="MicroNuba">
    <meta property="og:locale" content="es_CO">
    <meta property="og:url" content="https://micronuba.net/terminos.php">
    <meta property="og:title" content="Términos de Servicio - MicroNuba">
    <meta property="og:description" content="Términos de servicio de MicroNuba: condiciones de uso de sus productos de software y de la integración con WhatsApp.">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Términos de Servicio - MicroNuba">
    <meta name="twitter:description" content="Términos de servicio de MicroNuba: condiciones de uso de sus productos de software y de la integración con WhatsApp.">

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
                Términos de Servicio
            </h1>
            <p class="text-textMuted fade-in">
                MICRONUBA S.A.S. — condiciones de uso de nuestros productos de software y de su integración con WhatsApp.
            </p>
        </div>
    </header>

    <!-- CONTENT SECTION -->
    <section class="pb-24 bg-bgDark relative">
        <div class="container mx-auto px-6 max-w-3xl space-y-8">

            <!-- 1. Quiénes somos -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">1. Quiénes somos y a quién aplican</h2>
                <p class="text-textMuted leading-relaxed mb-4">
                    Estos términos regulan el uso de los productos de software de <strong class="text-white">MICRONUBA S.A.S.</strong>, identificada con NIT <strong class="text-white">902006565-9</strong>, con domicilio en <strong class="text-white">Carrera 70 A # 79-34</strong>, Bogotá D.C., Colombia ("MicroNuba"), por parte de las empresas que los contratan ("el Cliente").
                </p>
                <p class="text-textMuted leading-relaxed">
                    Si el Cliente tiene un contrato u orden de servicio firmada con MicroNuba, ese documento prevalece sobre estos términos en lo que los contradiga.
                </p>
            </div>

            <!-- 2. El servicio -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">2. El servicio</h2>
                <p class="text-textMuted leading-relaxed mb-4">
                    MicroNuba ofrece software de gestión en la nube para distintos sectores, como PLAGIE para instituciones educativas y Appits para talleres y lavaderos.
                </p>
                <p class="text-textMuted leading-relaxed">
                    Como parte de esos productos, el Cliente puede conectar <strong class="text-white">su propia cuenta de WhatsApp Business</strong> a nuestra plataforma, mediante el proceso de registro de Meta. Así puede enviar notificaciones a sus usuarios, como recibos, recordatorios y avisos, y recibir y responder sus mensajes desde el producto.
                </p>
            </div>

            <!-- 3. WhatsApp -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">3. Condiciones específicas de WhatsApp</h2>
                <ul class="text-textMuted leading-relaxed policy-list">
                    <li><strong class="text-white">La cuenta es del Cliente.</strong> La cuenta de WhatsApp Business, el número de teléfono y su nombre visible pertenecen al Cliente y están a su nombre ante Meta.</li>
                    <li><strong class="text-white">Meta factura los mensajes directamente al Cliente.</strong> El Cliente registra su propio método de pago en Meta y paga las tarifas de WhatsApp que Meta publique. MicroNuba no cobra ni revende los mensajes: cobra solo su software, según el plan contratado.</li>
                    <li><strong class="text-white">El Cliente acepta las condiciones de Meta.</strong> Al conectar su cuenta, el Cliente acepta y se obliga a cumplir los <a href="https://www.whatsapp.com/legal/business-terms" target="_blank" class="text-accent hover:underline">términos de WhatsApp Business</a>, la <a href="https://business.whatsapp.com/policy" target="_blank" class="text-accent hover:underline">política de WhatsApp Business</a> y la <a href="https://www.whatsapp.com/legal/commerce-policy" target="_blank" class="text-accent hover:underline">política comercial de WhatsApp</a>.</li>
                    <li><strong class="text-white">Autorización de los destinatarios.</strong> El Cliente solo escribe a personas que le han dado su número y han aceptado recibir sus mensajes por WhatsApp. Además, respeta de inmediato a quien pida no recibir más mensajes.</li>
                    <li><strong class="text-white">Decisiones de Meta.</strong> Meta aprueba o rechaza las plantillas y el nombre visible, fija los límites de envío y puede restringir o suspender una cuenta. MicroNuba no controla esas decisiones ni responde por ellas.</li>
                    <li><strong class="text-white">Desconexión.</strong> El Cliente puede desconectar su cuenta de WhatsApp en cualquier momento. Su cuenta y su número siguen siendo suyos y puede usarlos con otro proveedor.</li>
                </ul>
            </div>

            <!-- 4. Obligaciones del Cliente -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">4. Uso aceptable</h2>
                <p class="text-textMuted leading-relaxed mb-4">El Cliente se compromete a no usar el servicio para:</p>
                <ul class="text-textMuted leading-relaxed policy-list">
                    <li>enviar mensajes no solicitados, masivos o engañosos;</li>
                    <li>ofrecer productos o servicios prohibidos por la ley o por las políticas de WhatsApp;</li>
                    <li>suplantar a otra persona o empresa;</li>
                    <li>tratar datos personales sin la autorización que exige la ley;</li>
                    <li>intentar acceder a datos de otros clientes o comprometer la seguridad de la plataforma.</li>
                </ul>
                <p class="text-textMuted leading-relaxed mt-4">
                    El Cliente es responsable de mantener seguras las credenciales de sus usuarios y de todo lo que se haga con ellas.
                </p>
            </div>

            <!-- 5. Datos personales -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">5. Datos personales</h2>
                <p class="text-textMuted leading-relaxed">
                    Sobre los datos de sus propios usuarios, el Cliente es el responsable del tratamiento y MicroNuba actúa como encargado, según la Ley 1581 de 2012. MicroNuba trata esos datos solo para prestar el servicio, como se describe en la <a href="privacidad.php" class="text-accent hover:underline">Política de Privacidad</a>.
                </p>
            </div>

            <!-- 6. Disponibilidad -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">6. Disponibilidad y soporte</h2>
                <p class="text-textMuted leading-relaxed">
                    MicroNuba procura que el servicio esté disponible de forma continua, pero puede haber interrupciones por mantenimiento, fallas de terceros, como Meta o los proveedores de infraestructura, o causas de fuerza mayor. Las interrupciones programadas se avisan con antelación cuando es posible. El soporte se presta en <a href="mailto:contacto@micronuba.net" class="text-accent hover:underline">contacto@micronuba.net</a>.
                </p>
            </div>

            <!-- 7. Suspensión y terminación -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">7. Suspensión y terminación</h2>
                <p class="text-textMuted leading-relaxed mb-4">
                    MicroNuba puede suspender el envío de mensajes de un Cliente que incumpla estos términos o las políticas de WhatsApp, o cuyo uso ponga en riesgo la plataforma o a otros clientes. Siempre que sea posible, avisará antes y dará un plazo para corregir.
                </p>
                <p class="text-textMuted leading-relaxed">
                    Cualquiera de las partes puede terminar el servicio según el plan contratado. Al terminar, MicroNuba elimina los datos del Cliente en los plazos de la Política de Privacidad.
                </p>
            </div>

            <!-- 8. Propiedad intelectual -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">8. Propiedad intelectual</h2>
                <p class="text-textMuted leading-relaxed">
                    El software y las marcas de MicroNuba son de MicroNuba. Los contenidos y datos del Cliente son del Cliente. WhatsApp y Meta son marcas de Meta Platforms, Inc.; MicroNuba no está afiliada a Meta ni cuenta con su patrocinio.
                </p>
            </div>

            <!-- 9. Responsabilidad -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">9. Limitación de responsabilidad</h2>
                <p class="text-textMuted leading-relaxed">
                    En la medida en que la ley lo permita, MicroNuba no responde por daños indirectos ni por lucro cesante. Su responsabilidad total frente al Cliente se limita al valor pagado por el Cliente en los tres meses anteriores al hecho que la origine. MicroNuba tampoco responde por los mensajes que el Cliente decida enviar, ni por las decisiones de Meta sobre su cuenta.
                </p>
            </div>

            <!-- 10. Cambios -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">10. Cambios en estos términos</h2>
                <p class="text-textMuted leading-relaxed">
                    MicroNuba puede actualizar estos términos y avisará a los Clientes de los cambios importantes con al menos 15 días de antelación. Seguir usando el servicio después de esa fecha implica aceptarlos.
                </p>
            </div>

            <!-- 11. Ley aplicable -->
            <div class="glass-card p-8 rounded-2xl">
                <h2 class="text-2xl font-bold text-white mb-4 title-accent">11. Ley aplicable y contacto</h2>
                <p class="text-textMuted leading-relaxed mb-6">
                    Estos términos se rigen por las leyes de la República de Colombia. Cualquier diferencia se intentará resolver primero de forma directa y, si no es posible, ante los jueces de Bogotá. Para cualquier consulta, escríbanos a
                    <a href="mailto:contacto@micronuba.net" class="text-accent hover:underline">contacto@micronuba.net</a>.
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
