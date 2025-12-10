<?php
require_once 'config/config.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <?php if (BASE_URL): ?>
        <base href="<?php echo BASE_URL; ?>">
    <?php endif; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotizar Proyecto - MicroNuba</title>
    <meta name="description" content="Solicita una cotización para tu proyecto tecnológico. Desarrollo web, apps móviles, consultoría y más.">
    <link rel="icon" href="assets/img/micronuba-logo.ico" type="image/x-icon">

    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Configuración de Colores (Misma que index.php) -->
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
        body {
            background-color: #0f172a;
            color: #f8fafc;
        }

        .tech-bg {
            background-image:
                radial-gradient(circle at 100% 0%, rgba(6, 182, 212, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 0% 100%, rgba(59, 130, 246, 0.05) 0%, transparent 50%);
        }

        .glass-form {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }

        /* Custom Form Inputs */
        .form-input {
            background: rgba(15, 23, 42, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #f8fafc;
            transition: all 0.3s ease;
        }

        .form-input:focus {
            border-color: #06b6d4;
            outline: none;
            box-shadow: 0 0 0 2px rgba(6, 182, 212, 0.2);
        }

        /* Custom Select Arrow */
        select.form-input {
            appearance: none;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%2394a3b8' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 0.5rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
            padding-right: 2.5rem;
        }

        .fade-in {
            animation: fadeIn 0.8s ease-out forwards;
            opacity: 0;
            transform: translateY(20px);
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body class="tech-bg font-body min-h-screen flex flex-col">

    <!-- NAV BAR SIMPLIFICADA -->
    <nav class="w-full z-50 py-6">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <a href="index.php" class="flex items-center group">
                <img src="assets/img/micronuba_dark_logo_banner.png" alt="MicroNuba Banner" class="h-16 md:h-20 w-auto object-contain opacity-90 hover:opacity-100 transition-opacity">
            </a>
            <a href="index.php" class="text-textMuted hover:text-white transition-colors flex items-center gap-2 text-sm font-medium">
                <i class="fa-solid fa-arrow-left"></i> Volver al Inicio
            </a>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <main class="flex-grow container mx-auto px-6 py-8 flex items-center justify-center">
        <div class="w-full max-w-4xl fade-in">

            <div class="text-center mb-10">
                <h1 class="font-display text-4xl md:text-5xl font-bold text-white mb-4">Cotiza tu <span class="text-accent">Proyecto</span></h1>
                <p class="text-textMuted text-lg max-w-2xl mx-auto">
                    Cuéntanos sobre tu idea. Nuestro equipo analizará tus requerimientos para ofrecerte una solución a medida.
                </p>
            </div>

            <div class="glass-form rounded-2xl p-8 md:p-12">
                <form id="quoteForm" class="space-y-8">

                    <!-- SECCIÓN 1: CLIENTE -->
                    <div>
                        <h3 class="text-xl font-display font-bold text-white mb-6 flex items-center gap-3">
                            <span class="bg-accent/10 text-accent w-8 h-8 rounded-full flex items-center justify-center text-sm">1</span>
                            Información de Contacto
                        </h3>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-textMuted">Nombre Completo *</label>
                                <input type="text" name="name" required class="form-input w-full rounded-lg px-4 py-3" placeholder="Ej: Juan Pérez">
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-textMuted">Empresa / Organización</label>
                                <input type="text" name="company" class="form-input w-full rounded-lg px-4 py-3" placeholder="Ej: Tech Solutions SAS">
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-textMuted">Correo Electrónico *</label>
                                <input type="email" name="email" required class="form-input w-full rounded-lg px-4 py-3" placeholder="juan@empresa.com">
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-textMuted">Teléfono / WhatsApp *</label>
                                <input type="tel" name="phone" required class="form-input w-full rounded-lg px-4 py-3" placeholder="+57 300 123 4567">
                            </div>
                        </div>
                    </div>

                    <hr class="border-white/10">

                    <!-- SECCIÓN 2: PROYECTO -->
                    <div>
                        <h3 class="text-xl font-display font-bold text-white mb-6 flex items-center gap-3">
                            <span class="bg-accent/10 text-accent w-8 h-8 rounded-full flex items-center justify-center text-sm">2</span>
                            Detalles del Proyecto
                        </h3>
                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-textMuted">Tipo de Proyecto *</label>
                                <select name="project_type" required class="form-input w-full rounded-lg px-4 py-3">
                                    <option value="" disabled selected>Selecciona una opción</option>
                                    <option value="Web">Desarrollo Web / E-commerce</option>
                                    <option value="Mobile">Aplicación Móvil</option>
                                    <option value="Cloud">Infraestructura Cloud / DevOps</option>
                                    <option value="Consulting">Consultoría / Auditoría</option>
                                    <option value="Other">Otro</option>
                                </select>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-textMuted">Nombre del Proyecto (Opcional)</label>
                                <input type="text" name="project_name" class="form-input w-full rounded-lg px-4 py-3" placeholder="Ej: Rediseño Portal Corporativo">
                            </div>
                        </div>

                        <div class="space-y-2 mb-6">
                            <label class="text-sm font-medium text-textMuted">Descripción General *</label>
                            <textarea name="description" required rows="4" class="form-input w-full rounded-lg px-4 py-3" placeholder="Describe brevemente de qué trata el proyecto..."></textarea>
                        </div>

                        <div class="space-y-2">
                            <label class="text-sm font-medium text-textMuted">Objetivos de Negocio</label>
                            <textarea name="objectives" rows="3" class="form-input w-full rounded-lg px-4 py-3" placeholder="¿Qué meta quieren alcanzar? (Ej: Aumentar ventas, automatizar procesos)"></textarea>
                        </div>
                    </div>

                    <hr class="border-white/10">

                    <!-- SECCIÓN 3: TIEMPOS Y PRESUPUESTO -->
                    <div>
                        <h3 class="text-xl font-display font-bold text-white mb-6 flex items-center gap-3">
                            <span class="bg-accent/10 text-accent w-8 h-8 rounded-full flex items-center justify-center text-sm">3</span>
                            Tiempos y Presupuesto
                        </h3>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-textMuted">Rango de Presupuesto Estimado</label>
                                <select name="budget" class="form-input w-full rounded-lg px-4 py-3">
                                    <option value="" disabled selected>Selecciona un rango</option>
                                    <option value="<4M">Menos de $4,000,000 COP</option>
                                    <option value="4M-20M">$4,000,000 - $20,000,000 COP</option>
                                    <option value="20M-40M">$20,000,000 - $40,000,000 COP</option>
                                    <option value=">40M">Más de $40,000,000 COP</option>
                                </select>
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-medium text-textMuted">Fecha Estimada de Inicio</label>
                                <input type="date" name="start_date" class="form-input w-full rounded-lg px-4 py-3 text-textMuted">
                            </div>
                        </div>
                    </div>

                    <!-- BOTÓN SUBMIT -->
                    <div class="pt-6">
                        <button type="submit" id="submitBtn" class="w-full bg-accent hover:bg-accentHover text-bgDark font-bold text-lg py-4 rounded-xl transition-all transform hover:scale-[1.02] shadow-lg shadow-accent/20 flex justify-center items-center gap-2">
                            <span>Enviar Solicitud</span>
                            <i class="fa-solid fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <!-- FOOTER SIMPLE -->
    <footer class="py-8 text-center text-textMuted text-sm border-t border-white/5 mt-10">
        <p>&copy; 2025 MicroNuba SAS. Todos los derechos reservados.</p>
    </footer>

    <!-- SCRIPT PARA MANEJO DEL FORMULARIO -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('quoteForm');
            const submitBtn = document.getElementById('submitBtn');
            const inputs = form.querySelectorAll('input[required], select[required], textarea[required]');

            // Funciones de Validación
            const validators = {
                email: (value) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value),
                phone: (value) => /^[+]?[\d\s-]{7,15}$/.test(value), // Acepta +, espacios, guiones y números
                text: (value) => value.trim().length >= 3,
                select: (value) => value !== "" && value !== null
            };

            const showError = (input, message) => {
                const parent = input.parentElement;
                let errorMsg = parent.querySelector('.error-msg');

                // Borde Rojo
                input.classList.add('border-red-500', 'focus:border-red-500', 'focus:ring-red-500');
                input.classList.remove('border-white/10', 'focus:border-accent');

                // Mensaje de Error
                if (!errorMsg) {
                    errorMsg = document.createElement('p');
                    errorMsg.className = 'error-msg text-red-400 text-xs mt-1 fade-in';
                    parent.appendChild(errorMsg);
                }
                errorMsg.textContent = message;
            };

            const clearError = (input) => {
                const parent = input.parentElement;
                const errorMsg = parent.querySelector('.error-msg');

                // Restaurar Estilos
                input.classList.remove('border-red-500', 'focus:border-red-500', 'focus:ring-red-500');
                input.classList.add('border-white/10');

                if (errorMsg) {
                    errorMsg.remove();
                }
            };

            const validateInput = (input) => {
                const value = input.value;
                const name = input.name;
                let isValid = true;
                let msg = '';

                if (input.hasAttribute('required') && !value.trim()) {
                    isValid = false;
                    msg = 'Este campo es obligatorio';
                } else if (name === 'email' && !validators.email(value)) {
                    isValid = false;
                    msg = 'Ingresa un correo válido';
                } else if (name === 'phone' && !validators.phone(value)) {
                    isValid = false;
                    msg = 'Ingresa un teléfono válido (mínimo 7 dígitos)';
                } else if ((name === 'name' || name === 'description') && !validators.text(value)) {
                    isValid = false;
                    msg = 'Debe tener al menos 3 caracteres';
                }

                if (!isValid) {
                    showError(input, msg);
                } else {
                    clearError(input);
                }
                return isValid;
            };

            // Event Listeners para validación en tiempo real
            inputs.forEach(input => {
                // Validar al salir del campo (blur)
                input.addEventListener('blur', () => validateInput(input));

                // Limpiar error mientras escribe (input)
                input.addEventListener('input', () => {
                    if (input.classList.contains('border-red-500')) {
                        validateInput(input);
                    }
                });
            });

            // Manejo del Submit
            form.addEventListener('submit', async function(e) {
                e.preventDefault();

                // Validar todos los campos antes de enviar
                let isFormValid = true;
                inputs.forEach(input => {
                    if (!validateInput(input)) {
                        isFormValid = false;
                    }
                });

                if (!isFormValid) {
                    // Shake effect o scroll al primer error
                    const firstError = form.querySelector('.border-red-500');
                    if (firstError) {
                        firstError.scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });
                        firstError.focus();
                    }
                    return;
                }

                const originalText = submitBtn.innerHTML;

                // Estado de carga
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fa-solid fa-circle-notch fa-spin"></i> Enviando...';
                submitBtn.classList.add('opacity-75', 'cursor-not-allowed');

                const formData = new FormData(this);

                try {
                    const response = await fetch('api/send_quote.php', {
                        method: 'POST',
                        body: formData
                    });

                    // Intentar parsear JSON, si falla es porque el servidor devolvió algo raro (HTML, warnings)
                    let result;
                    const textResponse = await response.text();

                    try {
                        result = JSON.parse(textResponse);
                    } catch (jsonError) {
                        console.error('Respuesta no válida del servidor:', textResponse);
                        throw new Error('Error de comunicación con el servidor. Revisa la consola.');
                    }

                    if (result.success) {
                        // Éxito
                        submitBtn.innerHTML = '<i class="fa-solid fa-check"></i> ¡Enviado con Éxito!';
                        submitBtn.classList.remove('bg-accent', 'hover:bg-accentHover', 'text-bgDark');
                        submitBtn.classList.add('bg-green-500', 'text-white');

                        setTimeout(() => {
                            alert('¡Gracias! Hemos recibido tu solicitud. Te contactaremos pronto.');
                            window.location.href = 'index.php';
                        }, 1500);
                    } else {
                        throw new Error(result.message || 'Error al enviar');
                    }
                } catch (error) {
                    console.error('Error:', error);
                    alert('Hubo un error al enviar el formulario: ' + error.message);

                    // Restaurar botón
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalText;
                    submitBtn.classList.remove('opacity-75', 'cursor-not-allowed');
                }
            });
        });
    </script>
</body>

</html>