# Contexto de Sesión: Portal MicroNuba

**Última Actualización:** 2026-02-12

## Estado Actual
Estamos ajustando el **Sistema de Gobierno** del proyecto. Se ha detectado que faltaban archivos clave referenciados en las reglas, por lo que se procedió a crear la estructura de documentación base.

## Logros de la Sesión
- Ajuste de `MANUAL_DE_USO.md` y `restore_context.md`.
- Creación de `.agent/RULES.md` con reglas de idioma y validación proactiva de skills.
- Creación de `doc/estructura_proyecto.md` con el mapa inicial del código.
- Configuración del sistema de "Gobierno Antigravity" para evitar amnesia entre sesiones.
- Sincronización de cambios en el repositorio (Git commit & push).

## Pendientes (To-Do)
- Validar funcionamiento del comando `/restore_context`.
- Iniciar auditoría de seguridad en los módulos `api/` y `config/`.
- Revisar scripts de despliegue (`build_release.sh`).

## Estado Técnico
- Docker: Activo y funcional según `docker-compose.yml`.
- PHP: 8.x (estimado por PHPMailer y sintaxis).
- Base de Datos: Verificada en `config.php`.
