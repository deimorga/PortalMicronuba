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
    <title>Appits | Gestión Integral de Talleres y Lavaderos - MicroNuba</title>
    <meta name="description" content="Appits: la plataforma SaaS para talleres mecánicos, lavaderos y centros de servicio automotor. Agendamiento, recepción, diagnóstico, portal del cliente, facturación y reportes en un solo lugar.">
    <link rel="canonical" href="https://micronuba.net/appits.php">

    <!-- Open Graph / Twitter Card -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="MicroNuba">
    <meta property="og:locale" content="es_CO">
    <meta property="og:url" content="https://micronuba.net/appits.php">
    <meta property="og:title" content="Appits | Gestión Integral de Talleres y Lavaderos - MicroNuba">
    <meta property="og:description" content="Appits: la plataforma SaaS para talleres mecánicos, lavaderos y centros de servicio automotor. Agendamiento, recepción, diagnóstico, portal del cliente, facturación y reportes en un solo lugar.">
    <meta property="og:image" content="https://micronuba.net/sitepro/portal_web_micronuba/assets/img/appits_ejecucion.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Appits | Gestión Integral de Talleres y Lavaderos - MicroNuba">
    <meta name="twitter:description" content="Appits: la plataforma SaaS para talleres mecánicos, lavaderos y centros de servicio automotor. Agendamiento, recepción, diagnóstico, portal del cliente, facturación y reportes en un solo lugar.">
    <meta name="twitter:image" content="https://micronuba.net/sitepro/portal_web_micronuba/assets/img/appits_ejecucion.png">

    <!-- Datos estructurados -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "SoftwareApplication",
        "name": "Appits",
        "applicationCategory": "BusinessApplication",
        "operatingSystem": "Web, Android",
        "description": "Appits: plataforma SaaS multi-tenant de gestión integral para talleres mecánicos, lavaderos y centros de servicio automotor — agendamiento de citas, recepción, diagnóstico, ejecución, portal del cliente, facturación e inventario.",
        "url": "https://micronuba.net/appits.php",
        "image": "https://micronuba.net/sitepro/portal_web_micronuba/assets/img/appits_ejecucion.png",
        "publisher": {
            "@type": "Organization",
            "name": "MicroNuba",
            "url": "https://micronuba.net/"
        }
    }
    </script>

    <link rel="icon" href="assets/img/micronuba_favicon.png" type="image/png">

    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <style>
        body {
            background-color: #0f172a;
            color: #f8fafc;
            overflow-x: hidden;
        }

        .tech-bg {
            background-image:
                linear-gradient(to bottom, rgba(15, 23, 42, 0.9), rgba(15, 23, 42, 0.95)),
                url('https://images.unsplash.com/photo-1487754180451-c456f719a1fc?q=80&w=2670&auto=format&fit=crop');
            background-size: cover;
            background-attachment: fixed;
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 0.8s ease-out forwards;
        }

        .delay-100 {
            animation-delay: 0.1s;
        }

        .delay-200 {
            animation-delay: 0.2s;
        }

        .delay-300 {
            animation-delay: 0.3s;
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
            transition: transform 0.3s ease, border-color 0.3s ease;
        }

        .glass-card:hover {
            transform: translateY(-5px);
            border-color: #06b6d4;
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
    </style>
</head>

<body class="tech-bg font-body">

    <!-- NAV BAR -->
    <nav class="fixed w-full z-50 bg-bgDark/90 backdrop-blur-md border-b border-white/10">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
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
    <header class="relative min-h-[80vh] flex items-center pt-32 pb-20 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-bgDark/50 to-bgDark"></div>
        <div class="container mx-auto px-6 relative z-10 text-center">
            <!-- WORDMARK APPITS -->
            <div class="mb-8 flex justify-center fade-in">
                <div class="flex items-center gap-4">
                    <img src="assets/img/icons/appits_isotipo.png" alt="Appits" class="h-20 w-auto object-contain">
                    <h1 class="font-display text-6xl md:text-7xl font-bold text-white">Appits</h1>
                </div>
            </div>

            <p class="text-xl text-textMuted max-w-2xl mx-auto mb-10">
                La plataforma integral para talleres mecánicos, lavaderos y centros de servicio automotor. Del agendamiento a la entrega, cada vehículo bajo control.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://wa.me/573203543092?text=Hola%2C%20vengo%20desde%20el%20portal%20de%20MicroNuba%20y%20quisiera%20un%20demo%20de%20Appits" target="_blank" class="bg-accent hover:bg-accentHover text-bgDark font-bold px-8 py-4 rounded-lg text-center transition-all transform hover:scale-105">
                    Solicitar Demo
                </a>
            </div>
        </div>
    </header>

    <!-- CONTENT SECTION -->
    <section class="py-20 bg-bgDark relative">
        <div class="container mx-auto px-6">
            <div class="mb-16 text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 font-display text-white title-accent inline-block">
                    Appits: Un Ecosistema Integral para su Taller o Lavadero
                </h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8 mb-32">
                <!-- Feature 1: Operación -->
                <div class="glass-card p-8 rounded-2xl relative group h-full fade-in delay-100 hover:bg-white/5 transition-all duration-300">
                    <div class="w-14 h-14 bg-accent/20 rounded-xl flex items-center justify-center text-2xl text-accent mb-6">
                        <i class="fa-solid fa-screwdriver-wrench"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-accent mb-3">Operación</h3>
                    <p class="text-white font-medium mb-2">El taller, siempre bajo control.</p>
                    <p class="text-textMuted text-sm">
                        Agendamiento, recepción, diagnóstico, ejecución y calidad, en un solo flujo.
                    </p>
                </div>

                <!-- Feature 2: Cliente -->
                <div class="glass-card p-8 rounded-2xl relative group h-full fade-in delay-200 hover:bg-white/5 transition-all duration-300">
                    <div class="w-14 h-14 bg-blue-500/20 rounded-xl flex items-center justify-center text-2xl text-blue-400 mb-6">
                        <i class="fa-solid fa-comments"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-blue-400 mb-3">Cliente</h3>
                    <p class="text-white font-medium mb-2">Su cliente, siempre informado.</p>
                    <p class="text-textMuted text-sm">
                        Portal, notificaciones y chat en tiempo real.
                    </p>
                </div>

                <!-- Feature 3: Negocio -->
                <div class="glass-card p-8 rounded-2xl relative group h-full fade-in delay-300 hover:bg-white/5 transition-all duration-300">
                    <div class="w-14 h-14 bg-cyan-500/20 rounded-xl flex items-center justify-center text-2xl text-cyan-400 mb-6">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-cyan-400 mb-3">Negocio</h3>
                    <p class="text-white font-medium mb-2">Números claros, decisiones rápidas.</p>
                    <p class="text-textMuted text-sm">
                        Facturación, inventario y reportes financieros al día.
                    </p>
                </div>
            </div>

            <!-- DETAILED SECTIONS -->

            <!-- Section 1: Recepción, Diagnóstico y Ejecución -->
            <div class="grid md:grid-cols-2 gap-12 items-center mb-24">
                <div class="order-2 md:order-1">
                    <img src="assets/img/appits_ejecucion.png" alt="Kanban de Ejecución Appits" class="rounded-2xl border border-white/10 shadow-2xl w-full">
                </div>
                <div class="order-1 md:order-2">
                    <h3 class="text-3xl font-bold text-white mb-2">Agendamiento, Recepción y Ejecución</h3>
                    <h4 class="text-accent text-xl font-bold mb-6">Cada Vehículo, Siempre Visible</h4>
                    <p class="text-textMuted mb-6">
                        Desde que su cliente reserva la cita hasta que el vehículo sale, todo en un solo flujo en tiempo real — sin llamadas ni planillas sueltas.
                    </p>
                    <ul class="space-y-4 text-textMuted">
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-check text-accent mt-1"></i>
                            <div><strong class="text-white">Agendamiento en Línea:</strong> Sus clientes reservan su cita desde el portal, sin coordinarla a mano por WhatsApp.</div>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-check text-accent mt-1"></i>
                            <div><strong class="text-white">Kanban en Tiempo Real:</strong> Cada orden, visible por etapa: recepción, diagnóstico, ejecución y calidad.</div>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-check text-accent mt-1"></i>
                            <div><strong class="text-white">Diagnóstico Digital:</strong> Checklist estructurado con evidencia fotográfica y entrada por voz.</div>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-check text-accent mt-1"></i>
                            <div><strong class="text-white">Cotizaciones y Aprobaciones:</strong> El cliente aprueba por WhatsApp, correo o chat interno.</div>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-check text-accent mt-1"></i>
                            <div><strong class="text-white">Registro Express con QR:</strong> Recepción ágil directo desde el mostrador.</div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Section 2: Portal del Cliente -->
            <div class="grid md:grid-cols-2 gap-12 items-center mb-24">
                <div>
                    <h3 class="text-3xl font-bold text-white mb-2">Portal del Cliente y Comunicación</h3>
                    <h4 class="text-blue-400 text-xl font-bold mb-6">Su Cliente, Siempre Informado</h4>
                    <p class="text-textMuted mb-6">
                        Nada de llamar a preguntar "¿cómo va mi carro?" — el cliente lo ve en tiempo real, desde su celular.
                    </p>
                    <ul class="space-y-4 text-textMuted">
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-check text-blue-400 mt-1"></i>
                            <div><strong class="text-white">Portal Web y Móvil:</strong> El cliente sigue el estado real de su vehículo desde cualquier dispositivo.</div>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-check text-blue-400 mt-1"></i>
                            <div><strong class="text-white">Certificado de Calidad:</strong> Evidencia fotográfica del servicio entregado, con respaldo profesional.</div>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-check text-blue-400 mt-1"></i>
                            <div><strong class="text-white">Chat en Tiempo Real:</strong> Mensajería directa, estilo WhatsApp, entre el taller y el cliente.</div>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-check text-blue-400 mt-1"></i>
                            <div><strong class="text-white">Notificaciones Multicanal:</strong> Avisos push, email y WhatsApp en cada cambio de estado.</div>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center">
                    <img src="assets/img/appits_portal_cliente.png" alt="Portal del Cliente Appits" class="rounded-2xl border border-white/10 shadow-2xl max-w-xs w-full">
                </div>
            </div>

            <!-- Section 3: Gestión, Facturación y Reportes -->
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="order-2 md:order-1">
                    <img src="assets/img/appits_dashboard.png" alt="Dashboard Financiero Appits" class="rounded-2xl border border-white/10 shadow-2xl w-full">
                </div>
                <div class="order-1 md:order-2">
                    <h3 class="text-3xl font-bold text-white mb-2">Gestión, Facturación y Reportes</h3>
                    <h4 class="text-cyan-400 text-xl font-bold mb-6">El Negocio, Bajo Control</h4>
                    <p class="text-textMuted mb-6">
                        Herramientas diseñadas para que el dueño del taller o lavadero decida con datos reales, no con corazonadas.
                    </p>
                    <ul class="space-y-4 text-textMuted">
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-check text-cyan-400 mt-1"></i>
                            <div><strong class="text-white">Facturación Electrónica:</strong> Emisión, anulación e historial completo, con reversión automática de inventario.</div>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-check text-cyan-400 mt-1"></i>
                            <div><strong class="text-white">Inventario Integrado:</strong> Control de repuestos conectado en tiempo real con el catálogo.</div>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-check text-cyan-400 mt-1"></i>
                            <div><strong class="text-white">Dashboard Financiero:</strong> KPIs operativos y financieros al instante, con exportación a PDF/Excel.</div>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fa-solid fa-check text-cyan-400 mt-1"></i>
                            <div><strong class="text-white">Multi-Sucursal:</strong> Un solo panel para todas sus sedes, con app móvil nativa para el equipo técnico.</div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Section 4: Beneficios y Tecnología -->
            <div class="mt-32">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 font-display text-white title-accent inline-block">
                        ¿Por qué elegir Appits?
                    </h2>
                    <p class="text-textMuted max-w-2xl mx-auto">
                        Más que un software, somos su aliado tecnológico estratégico.
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Benefit 1: Multi-tenant -->
                    <div class="glass-card p-6 rounded-2xl hover:bg-white/5 transition-all duration-300">
                        <div class="text-3xl text-accent mb-4"><i class="fa-solid fa-building"></i></div>
                        <h4 class="text-lg font-bold text-white mb-2">Su Negocio, Su Espacio</h4>
                        <p class="text-sm text-textMuted">Cada negocio opera con su propio subdominio y su propia marca, con los datos completamente aislados de los demás.</p>
                    </div>

                    <!-- Benefit 2: Security -->
                    <div class="glass-card p-6 rounded-2xl hover:bg-white/5 transition-all duration-300">
                        <div class="text-3xl text-accent mb-4"><i class="fa-solid fa-shield-halved"></i></div>
                        <h4 class="text-lg font-bold text-white mb-2">Seguridad de Nivel Empresarial</h4>
                        <p class="text-sm text-textMuted">Aislamiento de datos a nivel de base de datos y roles y permisos configurables por cargo.</p>
                    </div>

                    <!-- Benefit 3: Mobile App -->
                    <div class="glass-card p-6 rounded-2xl hover:bg-white/5 transition-all duration-300">
                        <div class="text-3xl text-accent mb-4"><i class="fa-solid fa-mobile-screen-button"></i></div>
                        <h4 class="text-lg font-bold text-white mb-2">App Móvil Nativa</h4>
                        <p class="text-sm text-textMuted">Aplicación Android para su equipo técnico, con notificaciones push nativas en cada actualización.</p>
                    </div>

                    <!-- Benefit 4: Ecosystem -->
                    <div class="glass-card p-6 rounded-2xl hover:bg-white/5 transition-all duration-300">
                        <div class="text-3xl text-accent mb-4"><i class="fa-solid fa-puzzle-piece"></i></div>
                        <h4 class="text-lg font-bold text-white mb-2">Ecosistema MicroNuba</h4>
                        <p class="text-sm text-textMuted">Conectado con nuestra plataforma de Inventarios: stock y precios de repuestos siempre al día.</p>
                    </div>
                </div>
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
                        <li><a href="plagie.php" class="hover:text-accent transition-colors">PLAGIE</a></li>
                        <li><a href="cotizar.php" class="hover:text-accent transition-colors">Cotizar</a></li>
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
