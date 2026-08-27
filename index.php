<?php
?>
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
    <title>MicroNuba: Impulsamos el motor de la economía con tecnología transversal para todos los sectores, apoyados con soluciones y herramientas IA.</title>
    <meta name="description" content="Expertos en desarrollo a la medida, SaaS e infraestructura TI. Llevamos la tecnología de las grandes empresas a tu Pyme. Agenda tu diagnóstico hoy.">
    <link rel="canonical" href="https://micronuba.net/">

    <!-- Open Graph / Twitter Card -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="MicroNuba">
    <meta property="og:locale" content="es_CO">
    <meta property="og:url" content="https://micronuba.net/">
    <meta property="og:title" content="MicroNuba: tecnología a la medida para tu Pyme, con IA">
    <meta property="og:description" content="Expertos en desarrollo a la medida, SaaS e infraestructura TI. Llevamos la tecnología de las grandes empresas a tu Pyme.">
    <meta property="og:image" content="https://micronuba.net/sitepro/portal_web_micronuba/assets/img/hero_tech.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="MicroNuba: tecnología a la medida para tu Pyme, con IA">
    <meta name="twitter:description" content="Expertos en desarrollo a la medida, SaaS e infraestructura TI. Llevamos la tecnología de las grandes empresas a tu Pyme.">
    <meta name="twitter:image" content="https://micronuba.net/sitepro/portal_web_micronuba/assets/img/hero_tech.png">

    <!-- Datos estructurados -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "MicroNuba",
        "legalName": "MicroNuba SAS",
        "url": "https://micronuba.net/",
        "logo": "https://micronuba.net/sitepro/portal_web_micronuba/assets/img/micronuba_horizontal_sin_fondo_Ajus.png",
        "description": "Empresa de tecnología dedicada al desarrollo de software a la medida, productos SaaS, infraestructura cloud y consultoría TI para pymes en Colombia y Latinoamérica.",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Bogotá",
            "addressCountry": "CO"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "email": "contacto@micronuba.net",
            "contactType": "customer service",
            "areaServed": "CO"
        },
        "sameAs": [
            "https://www.facebook.com/profile.php?id=61585605239590",
            "https://www.instagram.com/micro_nuba/"
        ]
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

    <!-- Configuración de Colores -->

    <style>
        /* Estilos Personalizados */
        body {
            background-color: #0f172a;
            color: #f8fafc;
            overflow-x: hidden;
        }

        /* Fondo Tecnológico Abstracto */
        .tech-bg {
            background-image:
                radial-gradient(circle at 100% 0%, rgba(6, 182, 212, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 0% 100%, rgba(59, 130, 246, 0.1) 0%, transparent 50%);
        }

        /* Glassmorphism Cards */
        .glass-card {
            background: rgba(30, 41, 59, 0.4);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.03);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .glass-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(120deg,
                    transparent,
                    rgba(6, 182, 212, 0.05),
                    transparent);
            transition: 0.5s;
        }

        .glass-card:hover::before {
            left: 100%;
        }

        .glass-card:hover {
            transform: translateY(-8px);
            border-color: rgba(6, 182, 212, 0.3);
            box-shadow: 0 20px 40px -15px rgba(6, 182, 212, 0.15);
            background: rgba(30, 41, 59, 0.6);
        }

        /* Animaciones */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Acento en títulos */
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

    <!-- NAVEGACIÓN ESTÁNDAR: Full-width con Glassmorphism sutil -->
    <nav class="fixed w-full z-50 transition-all duration-300 bg-bgDark/90 backdrop-blur-lg border-b border-white/5">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <!-- LOGO -->
            <a href="#" class="flex items-center group">
                <img src="assets/img/micronuba_horizontal_sin_fondo_Ajus.png" alt="MicroNuba Banner" class="h-logo-90 w-auto object-contain transition-all duration-300 group-hover:scale-105">
            </a>

            <!-- Desktop Menu -->
            <div class="hidden lg:flex gap-6 text-sm font-semibold items-center whitespace-nowrap">
                <a href="#nosotros" class="hover:text-accent transition-colors">Nosotros</a>
                <a href="#servicios" class="hover:text-accent transition-colors">Servicios</a>

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
                                    <i class="fa-solid fa-graduation-cap text-accent"></i>
                                </div>
                                <div>
                                    <span class="block font-bold text-white group-hover/item:text-accent transition-colors">PLAGIE</span>
                                    <span class="block text-xs text-textMuted mt-0.5">Gestión Integral Educativa</span>
                                </div>
                            </a>
                            <a href="appits.php" class="flex items-start gap-3 px-4 py-3 rounded-lg hover:bg-white/5 group/item transition-colors">
                                <div class="mt-1 w-8 h-8 rounded-lg bg-accent/10 flex items-center justify-center group-hover/item:bg-accent/20 transition-colors shrink-0">
                                    <i class="fa-solid fa-car-side text-accent"></i>
                                </div>
                                <div>
                                    <span class="block font-bold text-white group-hover/item:text-accent transition-colors">Appits</span>
                                    <span class="block text-xs text-textMuted mt-0.5">Gestión de Talleres</span>
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
                    <!-- Dropdown Menu -->
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

                <a href="#contacto" class="text-textMuted hover:text-accent transition-colors font-medium">Contáctanos</a>
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
            <a href="#nosotros" class="mobile-link text-3xl font-display font-bold hover:text-accent transition-all">Nosotros</a>
            <a href="#servicios" class="mobile-link text-3xl font-display font-bold hover:text-accent transition-all">Servicios</a>
            <a href="plagie.php" class="mobile-link text-3xl font-display font-bold hover:text-accent transition-all">PLAGIE</a>
            <a href="appits.php" class="mobile-link text-3xl font-display font-bold hover:text-accent transition-all">Appits</a>
            <a href="tools/Turnos.php" class="mobile-link text-3xl font-display font-bold hover:text-accent transition-all">Herramientas</a>
            <a href="#contacto" class="mobile-link text-3xl font-display font-bold hover:text-accent transition-all">Contáctanos</a>
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

    <!-- HERO SECTION -->
    <header class="relative min-h-screen flex flex-col justify-center pt-40 overflow-hidden">
        <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center relative z-20">
            <div class="fade-in">

                <h1 class="font-display text-6xl md:text-7xl font-bold leading-tight text-white mb-6">
                    Tu negocio <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-white to-accent">en la nube</span>
                </h1>
                <p class="text-2xl text-textMuted font-light border-l-4 border-accent pl-6 mb-10">
                    Soluciones de nivel corporativo, adaptadas a la agilidad de tu Pyme con soluciones y herramientas de IA.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="cotizar.php" class="bg-accent hover:bg-accentHover text-bgDark font-bold px-8 py-4 rounded-lg text-center transition-all transform hover:scale-105">
                        Cotizar
                    </a>
                    <a href="#servicios" class="border border-white/20 hover:border-accent hover:text-accent text-white font-semibold px-8 py-4 rounded-lg text-center transition-all">
                        Ver Servicios
                    </a>
                </div>
            </div>
            <!-- Imagen Abstracta Hero -->
            <div class="relative fade-in delay-200 hidden md:block" id="particles-js">
                <div class="absolute inset-0 bg-accent/20 blur-[100px] rounded-full pointer-events-none"></div>
                <img src="assets/img/hero_tech.png" alt="Cloud Technology" class="relative z-10 rounded-2xl border border-white/10 shadow-2xl opacity-80 hover:opacity-100 transition-opacity duration-500 w-[85%] mx-auto">
            </div>
        </div>
    </header>

    <!-- TRUST SIGNALS: TECH STACK -->
    <section class="py-10 bg-black/50 border-y border-white/5">
        <div class="container mx-auto px-6 text-center">
            <p class="text-textMuted text-sm uppercase tracking-widest mb-6">Stack Tecnológico que dominamos</p>
            <div class="flex flex-wrap justify-center gap-8 md:gap-16 opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
                <!-- IA Stack (Premium - Logos Oficiales) -->
                <div class="flex items-center gap-2">
                    <img src="https://www.vectorlogo.zone/logos/google_cloud/google_cloud-icon.svg" alt="GCP" class="h-8 w-auto">
                    <span class="font-bold text-xl">GCP</span>
                </div>
                <div class="flex items-center gap-2">
                    <img src="assets/img/icons/antigravity.svg" alt="Antigravity" class="h-8 w-auto">
                    <span class="font-bold text-xl">Antigravity</span>
                </div>
                <div class="flex items-center gap-2">
                    <img src="assets/img/icons/claude.svg" alt="Claude Code" class="h-8 w-auto">
                    <span class="font-bold text-xl">Claude Code</span>
                </div>
                <div class="flex items-center gap-2">
                    <img src="assets/img/icons/gemini.svg" alt="Gemini" class="h-8 w-auto">
                    <span class="font-bold text-xl">Gemini</span>
                </div>
                <div class="flex items-center gap-2">
                    <img src="assets/img/icons/claude.svg" alt="Claude" class="h-8 w-auto">
                    <span class="font-bold text-xl">Claude</span>
                </div>
                <div class="flex items-center gap-2">
                    <img src="assets/img/icons/anthropic.svg" alt="Anthropic" class="h-8 w-auto">
                    <span class="font-bold text-xl">Anthropic</span>
                </div>
                <div class="flex items-center gap-2">
                    <img src="https://notebooklm.google.com/_/static/branding/v5/light_mode/icon.svg" alt="NotebookLM" class="h-8 w-auto">
                    <span class="font-bold text-xl">NotebookLM</span>
                </div>
                <div class="flex items-center gap-2">
                    <img src="assets/img/icons/ai_studio.svg" alt="AI Studio" class="h-8 w-auto">
                    <span class="font-bold text-xl">AI Studio</span>
                </div>
                <div class="flex items-center gap-2">
                    <img src="https://fonts.gstatic.com/s/i/short-term/release/googlesymbols/labs/default/24px.svg" alt="Stitch" class="h-8 w-auto">
                    <span class="font-bold text-xl">Stitch</span>
                </div>

                <!-- Infrastructure & Languages -->
                <div class="flex items-center gap-2"><i class="fa-brands fa-aws text-3xl"></i> <span class="font-bold text-xl">AWS</span></div>
                <div class="flex items-center gap-2"><i class="fa-brands fa-microsoft text-3xl"></i> <span class="font-bold text-xl">Azure</span></div>
                <div class="flex items-center gap-2"><i class="fa-brands fa-python text-3xl"></i> <span class="font-bold text-xl">Python</span></div>
                <div class="flex items-center gap-2"><i class="fa-brands fa-react text-3xl"></i> <span class="font-bold text-xl">React</span></div>
                <div class="flex items-center gap-2"><i class="fa-brands fa-docker text-3xl"></i> <span class="font-bold text-xl">Docker</span></div>
            </div>
        </div>
    </section>

    <!-- CONTEXTO & DESAFÍOS -->
    <section class="py-20 bg-bgDark relative">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div class="fade-in">
                    <h2 class="font-display text-4xl font-bold mb-6 title-accent">El Desafío Digital</h2>
                    <p class="text-textMuted text-lg mb-6">
                        En la era actual, las PYMES enfrentan una encrucijada: modernizarse o quedarse atrás. La brecha tecnológica, los costos de infraestructura y la ciberseguridad son barreras reales.
                    </p>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3 text-textMain">
                            <i class="fa-solid fa-triangle-exclamation text-accent mt-1"></i>
                            <span><strong>Infraestructura Costosa:</strong> Obsolescencia rápida de equipos.</span>
                        </li>
                        <li class="flex items-start gap-3 text-textMain">
                            <i class="fa-solid fa-user-xmark text-accent mt-1"></i>
                            <span><strong>Talento Escaso:</strong> Dificultad para gestionar TI compleja internamente.</span>
                        </li>
                        <li class="flex items-start gap-3 text-textMain">
                            <i class="fa-solid fa-shield-virus text-accent mt-1"></i>
                            <span><strong>Ciberseguridad:</strong> Vulnerabilidad creciente de datos.</span>
                        </li>
                    </ul>
                </div>
                <div class="glass-card p-8 rounded-2xl fade-in delay-100">
                    <h3 class="font-display text-2xl text-white mb-4">La Solución MicroNuba</h3>
                    <p class="text-textMuted mb-6">
                        MicroNuba nace con un propósito claro: llevar a pequeñas y medianas empresas a operar con tecnología de clase mundial, con un foco especial en la Inteligencia Artificial, eliminando complejidad y elevando su desempeño con soluciones confiables y modernas en software, infraestructura, herramientas de IA y consultoría.
                    </p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-bgDark/50 p-4 rounded-lg text-center">
                            <i class="fa-solid fa-piggy-bank text-accent text-2xl mb-2"></i>
                            <p class="text-sm font-bold">Ahorro Costos</p>
                        </div>
                        <div class="bg-bgDark/50 p-4 rounded-lg text-center">
                            <i class="fa-solid fa-rocket text-accent text-2xl mb-2"></i>
                            <p class="text-sm font-bold">Escalabilidad</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NOSOTROS -->
    <section id="nosotros" class="py-20 relative overflow-hidden">
        <!-- Elemento decorativo fondo -->
        <div class="absolute top-0 right-0 w-1/3 h-full bg-gradient-to-l from-accent/5 to-transparent"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16 fade-in">
                <h2 class="font-display text-4xl font-bold mb-6 inline-block border-b-4 border-accent pb-2">Por qué Nosotros</h2>
                <p class="text-textMuted text-lg">
                    Una nueva visión, respaldada por décadas de experiencia. Fundada por expertos de la industria TI para transformar Pymes.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Misión -->
                <div class="glass-card p-8 rounded-2xl fade-in">
                    <div class="w-14 h-14 bg-accent/10 rounded-xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-rocket text-2xl text-accent"></i>
                    </div>
                    <h3 class="font-display text-2xl font-bold text-white mb-4">Misión</h3>
                    <p class="text-textMuted">
                        Ser el aliado tecnológico integral de las pymes colombianas y latinoamericanas, entregando soluciones confiables y modernas en software, infraestructura, consultoría y herramientas de Inteligencia Artificial, que les permitan operar con eficiencia, crecer de forma sostenible y aprovechar tecnologías innovadoras.
                    </p>
                </div>

                <!-- Visión -->
                <div class="glass-card p-8 rounded-2xl fade-in delay-100">
                    <div class="w-14 h-14 bg-accent/10 rounded-xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-eye text-2xl text-accent"></i>
                    </div>
                    <h3 class="font-display text-2xl font-bold text-white mb-4">Visión</h3>
                    <p class="text-textMuted">
                        Convertirnos en la empresa tecnológica que transforma y moderniza el tejido empresarial pyme, combinando desarrollo a la medida, productos SaaS, infraestructura física y en la nube, y servicios de consultoría de alto impacto con la integración estratégica de soluciones y herramientas de Inteligencia Artificial.
                        <br><br>
                        Queremos que cada pyme vea en MicroNuba un socio estratégico capaz de acompañarla en su evolución digital, operativa y en la adopción de la Inteligencia Artificial como ventaja competitiva.
                    </p>
                </div>
            </div>

            <!-- SECCIÓN LIDERAZGO (NUEVA) -->
            <div class="mt-20 fade-in text-center">
                <h3 class="font-display text-3xl font-bold text-white mb-10 title-accent inline-block">Liderazgo</h3>
                <div class="grid md:grid-cols-2 gap-12 max-w-4xl mx-auto">
                    <!-- Deiby Moreno - Socio Fundador -->
                    <div class="glass-card p-6 rounded-xl">
                        <div class="w-32 h-32 rounded-full mx-auto mb-4 overflow-hidden border-4 border-accent shadow-xl">
                            <img src="assets/img/team/deiby_moreno.jpeg" alt="Deiby Moreno" class="w-full h-full object-cover">
                        </div>
                        <h4 class="text-2xl font-bold text-white mb-1">Deiby Moreno</h4>
                        <p class="text-accent text-lg font-semibold mb-1">Socio Fundador</p>
                        <p class="text-accent/80 text-sm mb-4">Chief Technology Officer</p>
                        <p class="text-textMuted text-sm leading-relaxed">
                            Especialista en Transformación Digital y Consultor de Tecnología Multinacional. +15 años liderando Proyectos Tecnológicos.
                        </p>
                    </div>

                    <!-- Andrés Rodrigo Tovar - Socio Fundador -->
                    <div class="glass-card p-6 rounded-xl">
                        <div class="w-32 h-32 rounded-full mx-auto mb-4 overflow-hidden border-4 border-accent shadow-xl">
                            <img src="assets/img/team/andres_tovar.jpeg" alt="Andrés Rodrigo Tovar" class="w-full h-full object-cover">
                        </div>
                        <h4 class="text-2xl font-bold text-white mb1">Andrés Rodrigo Tovar</h4>
                        <p class="text-accent text-lg font-semibold mb-1">Socio Fundador</p>
                        <p class="text-accent/80 text-sm mb-4">Director de Operaciones</p>
                        <p class="text-textMuted text-sm leading-relaxed">
                            Arquitecto de Software en Telecomunicaciones. +15 años liderando Proyectos Tecnológicos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICIOS -->
    <section id="servicios" class="py-20 bg-bgCard/30">
        <div class="container mx-auto px-6">
            <div class="mb-16 fade-in">
                <h2 class="font-display text-4xl font-bold mb-4 title-accent">Portafolio Integral</h2>
                <p class="text-textMuted text-lg max-w-2xl">Un ecosistema completo de servicios para cubrir cada etapa de su evolución digital.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- 1. Desarrollo a la Medida -->
                <div class="glass-card p-8 rounded-xl fade-in">
                    <i class="fa-solid fa-code text-4xl text-accent mb-6"></i>
                    <h3 class="font-display text-xl font-bold text-white mb-3">Desarrollo a la Medida</h3>
                    <p class="text-textMuted text-sm">Software adaptado a sus reglas de negocio con apoyo de soluciones y herramientas IA.</p>
                </div>

                <!-- 2. Infraestructura Cloud -->
                <div class="glass-card p-8 rounded-xl fade-in delay-100">
                    <i class="fa-solid fa-cloud text-4xl text-accent mb-6"></i>
                    <h3 class="font-display text-xl font-bold text-white mb-3">Infraestructura Cloud</h3>
                    <p class="text-textMuted text-sm">Arquitectura segura y escalable.</p>
                </div>

                <!-- 3. Productos SaaS -->
                <div class="glass-card p-8 rounded-xl fade-in delay-200">
                    <i class="fa-solid fa-cubes text-4xl text-accent mb-6"></i>
                    <h3 class="font-display text-xl font-bold text-white mb-3">Productos SaaS</h3>
                    <p class="text-textMuted text-sm">Plataformas propias, como PLAGIE, listas para usar por suscripción: sin desarrollos a la medida ni tiempos de espera.</p>
                </div>

                <!-- 4. Consultoría TI -->
                <div class="glass-card p-8 rounded-xl fade-in">
                    <i class="fa-solid fa-lightbulb text-4xl text-accent mb-6"></i>
                    <h3 class="font-display text-xl font-bold text-white mb-3">Consultoría TI</h3>
                    <p class="text-textMuted text-sm">Un equipo humano que lo acompaña de principio a fin, potenciado con Inteligencia Artificial para diagnosticar y avanzar más rápido.</p>
                </div>
                <!-- CTA Card -->
                <div class="bg-accent p-8 rounded-xl flex flex-col justify-center items-center text-center fade-in delay-200 transform hover:scale-105 transition-transform cursor-pointer order-first" onclick="window.location.href='cotizar.php'">
                    <h3 class="font-display text-xl font-bold text-bgDark mb-2">¿Necesitas algo específico?</h3>
                    <p class="text-bgDark/80 text-sm mb-4">Hablemos de tu proyecto</p>
                    <i class="fa-solid fa-arrow-right text-bgDark text-2xl"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- PRODUCTOS SAAS -->
    <section id="saas" class="py-20 relative">
        <div class="container mx-auto px-6">
            <h2 class="font-display text-4xl font-bold mb-12 text-center">Proyectos <span class="text-accent">Destacados</span></h2>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Proyecto 1 -->
                <a href="plagie.php" class="group relative rounded-2xl overflow-hidden h-64 md:h-80 cursor-pointer fade-in block">
                    <div class="absolute inset-0 bg-gradient-to-t from-bgDark via-bgDark/80 to-transparent z-10"></div>
                    <img src="assets/img/plagie_card_bg.png" alt="Gestión Colegios" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute bottom-0 left-0 p-8 z-20">
                        <div class="bg-accent text-bgDark text-xs font-bold px-3 py-1 rounded-full w-fit mb-3">SaaS Educativo</div>
                        <h3 class="font-display text-3xl font-bold text-white mb-2">Plagie</h3>
                        <p class="text-textMuted text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 transform translate-y-4 group-hover:translate-y-0">
                            Gestión Integral Educativa. Controla admisiones, notas, cartera y comunicaciones en una sola plataforma en la nube.
                        </p>
                    </div>
                </a>

                <!-- Proyecto 2 -->
                <a href="appits.php" class="group relative rounded-2xl overflow-hidden h-64 md:h-80 cursor-pointer fade-in delay-100 block">
                    <div class="absolute inset-0 bg-gradient-to-t from-bgDark via-bgDark/80 to-transparent z-10"></div>
                    <img src="assets/img/appits_ejecucion.png" alt="Appits" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute bottom-0 left-0 p-8 z-20">
                        <div class="bg-accent text-bgDark text-xs font-bold px-3 py-1 rounded-full w-fit mb-3">SaaS Talleres</div>
                        <h3 class="font-display text-3xl font-bold text-white mb-2">Appits</h3>
                        <p class="text-textMuted text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 transform translate-y-4 group-hover:translate-y-0">Gestión integral para talleres mecánicos: recepción, diagnóstico, facturación y portal del cliente en un solo lugar.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- VALORES -->
    <section class="py-20 bg-bgCard/30">
        <div class="container mx-auto px-6">
            <h2 class="font-display text-3xl font-bold mb-12 text-center">Nuestros <span class="text-accent">Valores</span></h2>
            <div class="grid md:grid-cols-3 gap-6">
                <!-- 1. Simplicidad -->
                <div class="glass-card p-8 rounded-2xl group hover:bg-white/10 transition-all duration-300 cursor-default h-full flex flex-col items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-accent/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <i class="fa-regular fa-circle-check text-4xl text-accent mb-4 transform transition-transform duration-300 group-hover:scale-110 group-hover:-translate-y-2"></i>
                    <h4 class="font-bold text-white text-xl mb-2 relative z-10">Simplicidad</h4>
                    <p class="text-textMuted text-sm text-center opacity-0 max-h-0 group-hover:opacity-100 group-hover:max-h-24 transition-all duration-500 relative z-10">
                        Diseñamos soluciones fáciles de usar. Si complica, no sirve. Buscamos la eficiencia en la experiencia del usuario.
                    </p>
                </div>

                <!-- 2. Innovación Útil -->
                <div class="glass-card p-8 rounded-2xl group hover:bg-white/10 transition-all duration-300 cursor-default h-full flex flex-col items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-accent/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <i class="fa-solid fa-bolt text-4xl text-accent mb-4 transform transition-transform duration-300 group-hover:scale-110 group-hover:-translate-y-2"></i>
                    <h4 class="font-bold text-white text-xl mb-2 relative z-10">Innovación Útil</h4>
                    <p class="text-textMuted text-sm text-center opacity-0 max-h-0 group-hover:opacity-100 group-hover:max-h-24 transition-all duration-500 relative z-10">
                        Aplicamos tecnología moderna — IA, automatización, IoT — únicamente cuando aporta valor tangible y medible.
                    </p>
                </div>

                <!-- 3. Claridad -->
                <div class="glass-card p-8 rounded-2xl group hover:bg-white/10 transition-all duration-300 cursor-default h-full flex flex-col items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-accent/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <i class="fa-solid fa-magnifying-glass text-4xl text-accent mb-4 transform transition-transform duration-300 group-hover:scale-110 group-hover:-translate-y-2"></i>
                    <h4 class="font-bold text-white text-xl mb-2 relative z-10">Claridad</h4>
                    <p class="text-textMuted text-sm text-center opacity-0 max-h-0 group-hover:opacity-100 group-hover:max-h-24 transition-all duration-500 relative z-10">
                        Ofrecemos condiciones transparentes y comunicación directa. Sin sorpresas, sin letra pequeña.
                    </p>
                </div>

                <!-- 4. Confiabilidad -->
                <div class="glass-card p-8 rounded-2xl group hover:bg-white/10 transition-all duration-300 cursor-default h-full flex flex-col items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-accent/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <i class="fa-solid fa-handshake text-4xl text-accent mb-4 transform transition-transform duration-300 group-hover:scale-110 group-hover:-translate-y-2"></i>
                    <h4 class="font-bold text-white text-xl mb-2 relative z-10">Confiabilidad</h4>
                    <p class="text-textMuted text-sm text-center opacity-0 max-h-0 group-hover:opacity-100 group-hover:max-h-24 transition-all duration-500 relative z-10">
                        Cumplimos nuestras promesas. Soporte real y continuidad garantizada para operaciones críticas.
                    </p>
                </div>

                <!-- 5. Seguridad y Responsabilidad -->
                <div class="glass-card p-8 rounded-2xl group hover:bg-white/10 transition-all duration-300 cursor-default h-full flex flex-col items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-accent/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <i class="fa-solid fa-shield-halved text-4xl text-accent mb-4 transform transition-transform duration-300 group-hover:scale-110 group-hover:-translate-y-2"></i>
                    <h4 class="font-bold text-white text-xl mb-2 relative z-10">Seguridad y Responsabilidad</h4>
                    <p class="text-textMuted text-sm text-center opacity-0 max-h-0 group-hover:opacity-100 group-hover:max-h-24 transition-all duration-500 relative z-10">
                        Cuidamos la información como activo primordial. Tecnología estable, escalable y segura.
                    </p>
                </div>

                <!-- 6. Mentalidad de Crecimiento -->
                <div class="glass-card p-8 rounded-2xl group hover:bg-white/10 transition-all duration-300 cursor-default h-full flex flex-col items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-accent/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <i class="fa-solid fa-chart-line text-4xl text-accent mb-4 transform transition-transform duration-300 group-hover:scale-110 group-hover:-translate-y-2"></i>
                    <h4 class="font-bold text-white text-xl mb-2 relative z-10">Mentalidad de Crecimiento</h4>
                    <p class="text-textMuted text-sm text-center opacity-0 max-h-0 group-hover:opacity-100 group-hover:max-h-24 transition-all duration-500 relative z-10">
                        Nos dedicamos a que las pymes prosperen usando la tecnología (IA) como ventaja competitiva.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTACTO & FOOTER -->
    <footer id="contacto" class="bg-black pt-20 pb-10 border-t border-white/10">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 mb-16">
                <div>
                    <a href="#" class="flex items-center gap-3 mb-6">
                        <!-- Banner en Footer: Ajuste de altura -->
                        <img src="assets/img/micronuba_logo_horizontal.png" alt="MicroNuba Banner" class="h-20 md:h-28 object-contain">
                    </a>
                    <p class="text-textMuted text-lg max-w-md mb-8">
                        Tu negocio en la nube: Simple, Potente y a tu medida.
                        Transformemos tu futuro hoy mismo.
                    </p>
                    <div class="flex gap-6">
                        <a href="https://www.facebook.com/profile.php?id=61585605239590" target="_blank" class="text-[#1877F2] hover:opacity-80 hover:scale-110 text-2xl transition-all"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com/micro_nuba/" target="_blank" class="text-[#E4405F] hover:opacity-80 hover:scale-110 text-2xl transition-all"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://wa.me/573203543092?text=Hola%2C%20vengo%20desde%20el%20portal%20de%20MicroNuba%20y%20quisiera%20saber%20m%C3%A1s%20de%20sus%20servicios." target="_blank" class="text-[#25D366] hover:opacity-80 hover:scale-110 text-2xl transition-all"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>

                <div class="glass-card p-8 rounded-xl">
                    <h3 class="font-display text-2xl font-bold text-white mb-6">Contáctanos</h3>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-4 text-textMain">
                            <div class="w-10 h-10 rounded-full bg-accent/20 flex items-center justify-center text-accent">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <span>contacto@micronuba.net</span>
                        </li>
                        <li class="flex items-center gap-4 text-textMain">
                            <div class="w-10 h-10 rounded-full bg-accent/20 flex items-center justify-center text-accent">
                                <i class="fa-solid fa-globe"></i>
                            </div>
                            <span>www.micronuba.net</span>
                        </li>
                        <li class="flex items-center gap-4 text-textMain">
                            <div class="w-10 h-10 rounded-full bg-accent/20 flex items-center justify-center text-accent">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <span>Bogotá, Colombia</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-white/10 pt-8 text-center md:text-left flex flex-col md:flex-row justify-between items-center text-sm text-textMuted">
                <p>&copy; 2025 MicroNuba SAS. Todos los derechos reservados.</p>
                <p class="mt-2 md:mt-0">CCB • Colombia</p>
            </div>
        </div>
    </footer>

    <!-- Script para animaciones y menú -->
    <script>
        // Observador para animaciones fade-in
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

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

        // Cerrar todos los menús al hacer click fuera o presionar Escape
        document.addEventListener('click', () => dropdowns.forEach(d => d.toggleMenu(false)));
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') dropdowns.forEach(d => d.toggleMenu(false));
        });
    </script>

    <!-- Particles.js Lite (Sin dependencias externas) -->
    <script>
        (function() {
            const canvas = document.createElement('canvas');
            const container = document.getElementById('particles-js');
            if (!container) return;

            canvas.style.position = 'absolute';
            canvas.style.top = '0';
            canvas.style.left = '0';
            canvas.style.width = '100%';
            canvas.style.height = '100%';
            canvas.style.zIndex = '0';
            canvas.style.pointerEvents = 'none';
            container.appendChild(canvas);

            const ctx = canvas.getContext('2d');
            let width, height;
            let particles = [];

            function resize() {
                width = canvas.width = container.offsetWidth;
                height = canvas.height = container.offsetHeight;
            }

            class Particle {
                constructor() {
                    this.x = Math.random() * width;
                    this.y = Math.random() * height;
                    this.vx = (Math.random() - 0.5) * 0.5;
                    this.vy = (Math.random() - 0.5) * 0.5;
                    this.size = Math.random() * 2 + 1;
                    this.color = `rgba(6, 182, 212, ${Math.random() * 0.5})`; // Accent color
                }
                update() {
                    this.x += this.vx;
                    this.y += this.vy;
                    if (this.x < 0) this.x = width;
                    if (this.x > width) this.x = 0;
                    if (this.y < 0) this.y = height;
                    if (this.y > height) this.y = 0;
                }
                draw() {
                    ctx.beginPath();
                    ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                    ctx.fillStyle = this.color;
                    ctx.fill();
                }
            }

            function init() {
                resize();
                for (let i = 0; i < 50; i++) particles.push(new Particle());
                animate();
            }

            function animate() {
                ctx.clearRect(0, 0, width, height);
                particles.forEach(p => {
                    p.update();
                    p.draw();
                });
                // Conexiones
                particles.forEach((p1, i) => {
                    for (let j = i + 1; j < particles.length; j++) {
                        const p2 = particles[j];
                        const dx = p1.x - p2.x;
                        const dy = p1.y - p2.y;
                        const dist = Math.sqrt(dx * dx + dy * dy);
                        if (dist < 100) {
                            ctx.beginPath();
                            ctx.strokeStyle = `rgba(6, 182, 212, ${0.1 - dist / 1000})`;
                            ctx.lineWidth = 0.5;
                            ctx.moveTo(p1.x, p1.y);
                            ctx.lineTo(p2.x, p2.y);
                            ctx.stroke();
                        }
                    }
                });
                requestAnimationFrame(animate);
            }

            window.addEventListener('resize', resize);
            init();
        })();

        // Lógica del Menú Móvil Mejorada (Accesibilidad)
        const mobileMenu = document.getElementById('mobile-menu');
        const openBtn = document.getElementById('mobile-menu-open');
        const closeBtn = document.getElementById('mobile-menu-close');
        const mobileLinks = document.querySelectorAll('.mobile-link');
        const mainContent = document.querySelector('main') || document.body; // Fallback

        // Focus Trap
        const focusableElements = mobileMenu.querySelectorAll('a, button');
        const firstFocusable = focusableElements[0];
        const lastFocusable = focusableElements[focusableElements.length - 1];

        const trapFocus = (e) => {
            if (e.key === 'Tab') {
                if (e.shiftKey) { // Shift + Tab
                    if (document.activeElement === firstFocusable) {
                        e.preventDefault();
                        lastFocusable.focus();
                    }
                } else { // Tab
                    if (document.activeElement === lastFocusable) {
                        e.preventDefault();
                        firstFocusable.focus();
                    }
                }
            } else if (e.key === 'Escape') {
                toggleMobileMenu(false);
                openBtn.focus();
            }
        };

        const toggleMobileMenu = (show) => {
            if (show) {
                mobileMenu.classList.remove('invisible', 'opacity-0');
                mobileMenu.classList.add('visible', 'opacity-100');
                document.body.style.overflow = 'hidden';
                openBtn.setAttribute('aria-expanded', 'true');
                mobileMenu.addEventListener('keydown', trapFocus);
                closeBtn.focus();
                // aria-hidden para el resto
                Array.from(document.body.children).forEach(child => {
                    if (child !== mobileMenu && child.tagName !== 'SCRIPT') {
                        child.setAttribute('aria-hidden', 'true');
                    }
                });
            } else {
                mobileMenu.classList.add('invisible', 'opacity-0');
                mobileMenu.classList.remove('visible', 'opacity-100');
                document.body.style.overflow = '';
                openBtn.setAttribute('aria-expanded', 'false');
                mobileMenu.removeEventListener('keydown', trapFocus);
                openBtn.focus();
                // Restaurar aria-hidden
                Array.from(document.body.children).forEach(child => {
                    child.removeAttribute('aria-hidden');
                });
            }
        };

        openBtn.addEventListener('click', () => toggleMobileMenu(true));
        closeBtn.addEventListener('click', () => toggleMobileMenu(false));

        mobileLinks.forEach(link => {
            link.addEventListener('click', () => toggleMobileMenu(false));
        });
    </script>
    <!-- Cambio de estilo del Navbar al hacer Scroll -->
    <script>
        const nav = document.querySelector('nav');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                nav.classList.add('py-2', 'bg-bgDark/95', 'shadow-xl');
                nav.classList.remove('py-3');
            } else {
                nav.classList.remove('py-2', 'bg-bgDark/95', 'shadow-xl');
                nav.classList.add('py-3');
            }
        });
    </script>
</body>

</html>