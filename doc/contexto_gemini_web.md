# Contexto de Sesión: Portal MicroNuba

**Última Actualización:** 2026-04-29

## Estado Actual
El proyecto se ha integrado exitosamente al Gateway de Infraestructura Local (Traefik v3) de MicroNuba en el puerto `:8090`. Se corrigió un problema de carga de recursos (CSS/imágenes) ajustando la directiva `<base href>` en PHP para que el navegador resuelva las rutas correctamente en el entorno de desarrollo bajo `portal.micronuba.local`.

## Logros de la Sesión
- Ajuste del `DocumentRoot` en `Dockerfile` apuntando a `/var/www/html/sitepro/portal_web_micronuba` resolviendo errores `403 Forbidden`.
- Integración en `docker-compose.local.yml` para conectarse a la red `micronuba_public` y exposición del servicio mediante labels de Traefik.
- Corrección de la constante `BASE_URL` en `config.php` y `config.example.php`. Se pasó de evaluar el string vacío (que suprimía la etiqueta `<base>` en HTML) a definir explícitamente `/` extrayendo el dominio sin puerto, resolviendo errores HTTP 404 en la carga de recursos estáticos.
- Sincronización de todos los ajustes al repositorio.

## Pendientes (To-Do)
- Validar funcionamiento general del Portal desde el nuevo esquema de Gateway local y asegurar que todas las páginas navegan bien sin enlaces rotos.
- Revisar scripts de despliegue (`build_release.sh`).
- Iniciar auditoría de seguridad en los módulos `api/` y `config/`.

## Estado Técnico
- Docker: Activo, centralizado en Traefik (usando el alias de `portal-micronuba` y `docker-compose.local.yml`).
- Gateway: Operando bajo `portal.micronuba.local`.
- PHP: 8.2 (según base `php:8.2-apache` en Dockerfile).
