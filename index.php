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
    <title>MicroNuba | Desarrollo de Software y Consultoría Cloud en Colombia</title>
    <meta name="description" content="Expertos en desarrollo a la medida, SaaS e infraestructura TI. Llevamos la tecnología de las grandes empresas a tu Pyme. Agenda tu diagnóstico hoy.">

    <link rel="icon" href="assets/img/micronuba_favicon.png" type="image/png">


    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Configuración de Colores -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        bgDark: '#0f172a',
                        /* Navy Oscuro */
                        bgCard: '#1e293b',
                        /* Slate 800 */
                        accent: '#06b6d4',
                        /* Cyan 500 */
                        accentHover: '#22d3ee',
                        textMain: '#f8fafc',
                        textMuted: '#94a3b8',
                    },
                    fontFamily: {
                        display: ['Space Grotesk', 'sans-serif'],
                        body: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>

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

        /* Marquee Animation */
        .marquee-container {
            overflow: hidden;
            white-space: nowrap;
            width: 100%;
            /* position: absolute; REMOVED */
            /* top: 140px; REMOVED */
            /* left: 0; REMOVED */
            z-index: 10;
            mask-image: linear-gradient(to right, transparent, black 5%, black 95%, transparent);
            -webkit-mask-image: linear-gradient(to right, transparent, black 5%, black 95%, transparent);
        }

        .marquee-content {
            display: inline-block;
            animation: marquee 40s linear infinite;
            padding-left: 100%;
            /* Start from right */
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-100%);
            }
        }
    </style>
</head>

<body class="tech-bg font-body">

    <!-- NAV BAR -->
    <nav class="fixed w-full z-50 bg-bgDark/90 backdrop-blur-md border-b border-white/10">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
            <!-- BANNER LOGO -->
            <a href="#" class="flex items-center group">
                <!-- Reducción de tamaño del logo para mejor jerarquía visual -->
                <img src="assets/img/micronuba_logo_horizontal.png" alt="MicroNuba Banner" class="h-10 md:h-12 w-auto object-contain transition-transform duration-300 group-hover:scale-105">
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex gap-8 text-sm font-semibold items-center">
                <a href="#nosotros" class="hover:text-accent transition-colors">Nosotros</a>
                <a href="#servicios" class="hover:text-accent transition-colors">Servicios</a>
                <a href="#saas" class="hover:text-accent transition-colors">Productos SaaS</a>

                <!-- Tools Dropdown -->
                <div class="relative">
                    <button id="tools-menu-button" aria-expanded="false" aria-haspopup="true" class="hover:text-accent transition-colors flex items-center gap-2 outline-none focus:ring-2 focus:ring-accent/50 rounded-lg px-2 py-1">
                        Herramientas <i class="fa-solid fa-chevron-down text-xs transition-transform duration-300" id="tools-chevron"></i>
                    </button>
                    <!-- Dropdown Menu -->
                    <div id="tools-menu" class="absolute top-full left-1/2 -translate-x-1/2 mt-4 w-64 opacity-0 invisible transition-all duration-300 transform translate-y-2 z-50">
                        <div class="bg-bgCard/95 backdrop-blur-xl border border-white/10 rounded-2xl shadow-2xl overflow-hidden p-2">
                            <div class="px-4 py-2 text-xs font-bold text-textMuted uppercase tracking-wider mb-1">Utilidades</div>



                            <a href="tools/Turnos.php" class="flex items-start gap-3 px-4 py-3 rounded-xl hover:bg-white/5 group/item transition-colors">
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

                <a href="cotizar.php" class="bg-accent hover:bg-accentHover text-bgDark px-5 py-2 rounded-full transition-all">Cotizar</a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-open" class="md:hidden text-white p-2 focus:outline-none" aria-label="Abrir menú">
                <i class="fa-solid fa-bars-staggered text-2xl"></i>
            </button>
        </div>
    </nav>

    <!-- MOBILE MENU OVERLAY -->
    <div id="mobile-menu" class="fixed inset-0 z-[60] bg-bgDark/95 backdrop-blur-2xl invisible opacity-0 transition-all duration-500 md:hidden">
        <div class="flex justify-between items-center p-6 border-b border-white/10">
            <img src="assets/img/micronuba_logo_horizontal.png" alt="MicroNuba" class="h-8">
            <button id="mobile-menu-close" class="text-white p-2 focus:outline-none" aria-label="Cerrar menú">
                <i class="fa-solid fa-xmark text-3xl"></i>
            </button>
        </div>
        <div class="flex flex-col gap-6 p-8 text-center h-full justify-center -mt-20">
            <a href="#nosotros" class="mobile-link text-3xl font-display font-bold hover:text-accent transition-all">Nosotros</a>
            <a href="#servicios" class="mobile-link text-3xl font-display font-bold hover:text-accent transition-all">Servicios</a>
            <a href="#saas" class="mobile-link text-3xl font-display font-bold hover:text-accent transition-all">SaaS</a>
            <a href="tools/Turnos.php" class="mobile-link text-3xl font-display font-bold hover:text-accent transition-all">Herramientas</a>
            <div class="pt-8">
                <a href="cotizar.php" class="bg-accent text-bgDark px-10 py-5 rounded-full font-bold text-2xl shadow-lg shadow-accent/20 active:scale-95 transition-all inline-block w-full">
                    Cotizar
                </a>
            </div>
        </div>
    </div>

    <!-- HERO SECTION -->
    <header class="relative min-h-screen flex flex-col justify-center pt-40 overflow-hidden">
        <!-- Full Width Marquee -->
        <div class="marquee-container mb-12">
            <p class="marquee-content text-accent/80 font-bold tracking-[0.2em] uppercase text-3xl md:text-4xl opacity-40">
                Empresa de Tecnología &nbsp; • &nbsp; Desarrollo de Software a la Medida &nbsp; • &nbsp; Soluciones Cloud & SaaS &nbsp; • &nbsp; Transformación Digital &nbsp; • &nbsp;
            </p>
        </div>

        <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center relative z-20">
            <div class="fade-in">

                <h1 class="font-display text-6xl md:text-7xl font-bold leading-tight text-white mb-6">
                    Tu negocio <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-white to-accent">en la nube</span>
                </h1>
                <p class="text-2xl text-textMuted font-light border-l-4 border-accent pl-6 mb-10">
                    Soluciones de nivel corporativo, adaptadas a la agilidad de tu Pyme.
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
            <div class="relative fade-in delay-200 hidden md:block">
                <div class="absolute inset-0 bg-accent/20 blur-[100px] rounded-full"></div>
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
                    <img src="https://www.gstatic.com/images/branding/product/2x/antigravity_64dp.png" alt="Antigravity" class="h-8 w-auto">
                    <span class="font-bold text-xl">Antigravity</span>
                </div>
                <div class="flex items-center gap-2">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/8/8f/Google_Gemini_logo.svg" alt="Gemini" class="h-8 w-auto">
                    <span class="font-bold text-xl">Gemini</span>
                </div>
                <div class="flex items-center gap-2">
                    <img src="https://notebooklm.google.com/_/static/branding/v5/light_mode/icon.svg" alt="NotebookLM" class="h-8 w-auto">
                    <span class="font-bold text-xl">NotebookLM</span>
                </div>
                <div class="flex items-center gap-2">
                    <img src="https://www.gstatic.com/images/branding/product/2x/ai_studio_64dp.png" alt="AI Studio" class="h-8 w-auto">
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
                        Democratizamos el acceso a tecnología de nivel empresarial. Transformamos la tecnología en un motor de crecimiento, eliminando la complejidad técnica.
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
                        Reducimos tu deuda tecnológica y aceleramos tu Time-to-Market. Ofrecemos soluciones confiables y modernas.
                    </p>
                </div>

                <!-- Visión -->
                <div class="glass-card p-8 rounded-2xl fade-in delay-100">
                    <div class="w-14 h-14 bg-accent/10 rounded-xl flex items-center justify-center mb-6">
                        <i class="fa-solid fa-eye text-2xl text-accent"></i>
                    </div>
                    <h3 class="font-display text-2xl font-bold text-white mb-4">Visión</h3>
                    <p class="text-textMuted">
                        Convertirnos en la empresa que transforma y moderniza el tejido empresarial de las PYMES, siendo reconocidos como el socio estratégico para su evolución digital.
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
                <!-- Servicio 1: Desarrollo -->
                <div class="glass-card p-8 rounded-xl fade-in">
                    <i class="fa-solid fa-code text-4xl text-accent mb-6"></i>
                    <h3 class="font-display text-xl font-bold text-white mb-3">Desarrollo de Software</h3>
                    <p class="text-textMuted text-sm">Web, Apps Móviles y plataformas a la medida. Backend robusto y escalable.</p>
                </div>

                <!-- Servicio 2: SaaS -->
                <div class="glass-card p-8 rounded-xl fade-in delay-100">
                    <i class="fa-solid fa-cubes text-4xl text-accent mb-6"></i>
                    <h3 class="font-display text-xl font-bold text-white mb-3">Software de Gestión (SaaS)</h3>
                    <p class="text-textMuted text-sm">Soluciones listas para colegios y gimnasios. Acelera tu operación hoy.</p>
                </div>

                <!-- Servicio 3: Consultoría + Cloud (Consolidado) -->
                <div class="glass-card p-8 rounded-xl fade-in delay-200">
                    <i class="fa-solid fa-cloud text-4xl text-accent mb-6"></i>
                    <h3 class="font-display text-xl font-bold text-white mb-3">Consultoría Cloud & TI</h3>
                    <p class="text-textMuted text-sm">Consultoría en Transformación Digital para Pymes. Migración Cloud (AWS/Azure) y Optimización de Procesos.</p>
                </div>

                <!-- Servicio 4: Hardware -->
                <div class="glass-card p-8 rounded-xl fade-in">
                    <i class="fa-solid fa-microchip text-4xl text-accent mb-6"></i>
                    <h3 class="font-display text-xl font-bold text-white mb-3">Infraestructura Física</h3>
                    <p class="text-textMuted text-sm">Venta de equipos corporativos y servidores para tu oficina.</p>
                </div>
                <!-- CTA Card -->
                <div class="bg-accent p-8 rounded-xl flex flex-col justify-center items-center text-center fade-in delay-200 transform hover:scale-105 transition-transform cursor-pointer" onclick="window.location.href='cotizar.php'">
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
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=2000&auto=format&fit=crop" alt="Gestión Colegios" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute bottom-0 left-0 p-8 z-20">
                        <div class="bg-accent text-bgDark text-xs font-bold px-3 py-1 rounded-full w-fit mb-3">SaaS Educativo</div>
                        <h3 class="font-display text-3xl font-bold text-white mb-2">Plagie</h3>
                        <p class="text-textMuted text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 transform translate-y-4 group-hover:translate-y-0">
                            Gestión Integral Educativa. Controla admisiones, notas, cartera y comunicaciones en una sola plataforma en la nube.
                        </p>
                    </div>
                </a>

                <!-- Proyecto 2 -->
                <div class="group relative rounded-2xl overflow-hidden h-64 md:h-80 cursor-pointer fade-in delay-100">
                    <div class="absolute inset-0 bg-gradient-to-t from-bgDark via-bgDark/80 to-transparent z-10"></div>
                    <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=2070&auto=format&fit=crop" alt="Gestión Gimnasios" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute bottom-0 left-0 p-8 z-20">
                        <div class="bg-accent text-bgDark text-xs font-bold px-3 py-1 rounded-full w-fit mb-3">SaaS Wellness</div>
                        <h3 class="font-display text-3xl font-bold text-white mb-2">Gestión Gimnasios</h3>
                        <p class="text-textMuted text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300 transform translate-y-4 group-hover:translate-y-0">Solución completa. Ayudando a centros deportivos a incrementar su retención en un 25%.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- VALORES -->
    <section class="py-20 bg-bgCard/30">
        <div class="container mx-auto px-6">
            <h2 class="font-display text-3xl font-bold mb-12 text-center">Nuestros <span class="text-accent">Valores</span></h2>
            <div class="grid md:grid-cols-3 gap-6">
                <!-- Simplicidad -->
                <div class="glass-card p-8 rounded-2xl group hover:bg-white/10 transition-all duration-300 cursor-default h-full flex flex-col items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-accent/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <i class="fa-regular fa-circle-check text-4xl text-accent mb-4 transform transition-transform duration-300 group-hover:scale-110 group-hover:-translate-y-2"></i>
                    <h4 class="font-bold text-white text-xl mb-2 relative z-10">Simplicidad</h4>
                    <p class="text-textMuted text-sm text-center opacity-0 max-h-0 group-hover:opacity-100 group-hover:max-h-24 transition-all duration-500 relative z-10">
                        Diseñamos soluciones fáciles. Si complica, no sirve.
                    </p>
                </div>

                <!-- Potencia -->
                <div class="glass-card p-8 rounded-2xl group hover:bg-white/10 transition-all duration-300 cursor-default h-full flex flex-col items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-accent/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <i class="fa-solid fa-bolt text-4xl text-accent mb-4 transform transition-transform duration-300 group-hover:scale-110 group-hover:-translate-y-2"></i>
                    <h4 class="font-bold text-white text-xl mb-2 relative z-10">Potencia</h4>
                    <p class="text-textMuted text-sm text-center opacity-0 max-h-0 group-hover:opacity-100 group-hover:max-h-24 transition-all duration-500 relative z-10">
                        Infraestructura robusta para operaciones críticas.
                    </p>
                </div>

                <!-- Seguridad -->
                <div class="glass-card p-8 rounded-2xl group hover:bg-white/10 transition-all duration-300 cursor-default h-full flex flex-col items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-accent/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <i class="fa-solid fa-shield-halved text-4xl text-accent mb-4 transform transition-transform duration-300 group-hover:scale-110 group-hover:-translate-y-2"></i>
                    <h4 class="font-bold text-white text-xl mb-2 relative z-10">Seguridad</h4>
                    <p class="text-textMuted text-sm text-center opacity-0 max-h-0 group-hover:opacity-100 group-hover:max-h-24 transition-all duration-500 relative z-10">
                        Protegemos su información con estándares globales.
                    </p>
                </div>

                <!-- Confiabilidad -->
                <div class="glass-card p-8 rounded-2xl group hover:bg-white/10 transition-all duration-300 cursor-default h-full flex flex-col items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-accent/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <i class="fa-solid fa-handshake text-4xl text-accent mb-4 transform transition-transform duration-300 group-hover:scale-110 group-hover:-translate-y-2"></i>
                    <h4 class="font-bold text-white text-xl mb-2 relative z-10">Confiabilidad</h4>
                    <p class="text-textMuted text-sm text-center opacity-0 max-h-0 group-hover:opacity-100 group-hover:max-h-24 transition-all duration-500 relative z-10">
                        Cumplimos sin letra pequeña. Soporte real.
                    </p>
                </div>

                <!-- Claridad -->
                <div class="glass-card p-8 rounded-2xl group hover:bg-white/10 transition-all duration-300 cursor-default h-full flex flex-col items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-accent/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <i class="fa-solid fa-magnifying-glass text-4xl text-accent mb-4 transform transition-transform duration-300 group-hover:scale-110 group-hover:-translate-y-2"></i>
                    <h4 class="font-bold text-white text-xl mb-2 relative z-10">Claridad</h4>
                    <p class="text-textMuted text-sm text-center opacity-0 max-h-0 group-hover:opacity-100 group-hover:max-h-24 transition-all duration-500 relative z-10">
                        Comunicación directa y transparente.
                    </p>
                </div>

                <!-- Crecimiento -->
                <div class="glass-card p-8 rounded-2xl group hover:bg-white/10 transition-all duration-300 cursor-default h-full flex flex-col items-center justify-center relative overflow-hidden">
                    <div class="absolute inset-0 bg-accent/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <i class="fa-solid fa-chart-line text-4xl text-accent mb-4 transform transition-transform duration-300 group-hover:scale-110 group-hover:-translate-y-2"></i>
                    <h4 class="font-bold text-white text-xl mb-2 relative z-10">Crecimiento</h4>
                    <p class="text-textMuted text-sm text-center opacity-0 max-h-0 group-hover:opacity-100 group-hover:max-h-24 transition-all duration-500 relative z-10">
                        Mentalidad enfocada en la prosperidad del cliente.
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
                        <a href="https://www.facebook.com/profile.php?id=61585605239590" target="_blank" class="text-white hover:text-accent text-2xl transition-colors"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com/micro_nuba/" target="_blank" class="text-white hover:text-accent text-2xl transition-colors"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://wa.me/573203543092" target="_blank" class="text-white hover:text-accent text-2xl transition-colors"><i class="fa-brands fa-whatsapp"></i></a>
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

        // Lógica del Menú Dropdown (Accesibilidad)
        const toolsBtn = document.getElementById('tools-menu-button');
        const toolsMenu = document.getElementById('tools-menu');
        const toolsChevron = document.getElementById('tools-chevron');

        const toggleMenu = (show) => {
            const isVisible = show !== undefined ? show : toolsMenu.classList.contains('invisible');
            if (isVisible) {
                toolsMenu.classList.remove('opacity-0', 'invisible', 'translate-y-2');
                toolsBtn.setAttribute('aria-expanded', 'true');
                toolsChevron.classList.add('rotate-180');
            } else {
                toolsMenu.classList.add('opacity-0', 'invisible', 'translate-y-2');
                toolsBtn.setAttribute('aria-expanded', 'false');
                toolsChevron.classList.remove('rotate-180');
            }
        };

        toolsBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            toggleMenu();
        });

        // Cerrar menú al hacer click fuera o presionar Escape
        document.addEventListener('click', () => toggleMenu(false));
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') toggleMenu(false);
        });

        // Evitar que el click dentro del menú lo cierre prematuramente
        toolsMenu.addEventListener('click', (e) => e.stopPropagation());

        // Lógica del Menú Móvil
        const mobileMenu = document.getElementById('mobile-menu');
        const openBtn = document.getElementById('mobile-menu-open');
        const closeBtn = document.getElementById('mobile-menu-close');
        const mobileLinks = document.querySelectorAll('.mobile-link');

        const toggleMobileMenu = (show) => {
            if (show) {
                mobileMenu.classList.remove('invisible', 'opacity-0');
                mobileMenu.classList.add('visible', 'opacity-100');
                document.body.style.overflow = 'hidden'; // Evitar scroll
            } else {
                mobileMenu.classList.add('invisible', 'opacity-0');
                mobileMenu.classList.remove('visible', 'opacity-100');
                document.body.style.overflow = ''; // Restaurar scroll
            }
        };

        openBtn.addEventListener('click', () => toggleMobileMenu(true));
        closeBtn.addEventListener('click', () => toggleMobileMenu(false));

        // Cerrar al hacer click en un link
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => toggleMobileMenu(false));
        });

        // Cambio de estilo del Navbar al hacer Scroll
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