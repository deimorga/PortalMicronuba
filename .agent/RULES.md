# Reglas Globales: Portal MicroNuba

Este archivo define las reglas y prohibiciones para el Agente (Antigravity).

## 1. Reglas Generales
- **Idioma:** TODA comunicación, planes, tareas y documentación debe ser en **ESPAÑOL**.
- **Contexto:** Mantener siempre actualizado el archivo `task.md` y `doc/contexto_gemini_web.md`.
- **Skills:** Ante CADA solicitud del usuario, validar proactivamente las `skills` disponibles para identificar cuáles son las más apropiadas para la ejecución.
- **Estructura:** No modificar la estructura de carpetas sin aprobación previa.

## 2. Prohibiciones
- No borrar archivos de configuración sensibles (`config/config.php`, `.env` si existiera).
- No realizar cambios masivos sin un `implementation_plan` aprobado.
- No ignorar los errores de linting o validación en el código PHP.

## 3. Estándares Técnicos
- PHP: Seguir buenas prácticas de seguridad y manejo de errores.
- Docker: Mantener `docker-compose.yml` funcional para el entorno local.
