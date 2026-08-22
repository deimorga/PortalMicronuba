# Contexto de Sesión: Portal MicroNuba

**Última Actualización:** 2026-08-22

## Estado Actual
Se ejecutó la Fase 0 (verificación de infraestructura) y Fase 1 (quick wins) del Acta de Mejoras 003 (16/07/2026), más una auditoría y optimización de "AI crawler readiness" (GEO). Todo quedó **desplegado y verificado en producción** (`https://micronuba.net`). Se confirmó que la infraestructura real de producción es **hosting compartido cPanel de Neolo** (no el VPS Docker/Traefik del resto del ecosistema MicroNuba), detrás de Cloudflare.

## Logros de la Sesión (2026-08-22)

### Infraestructura y despliegue
- Se mapeó la arquitectura real del hosting: `public_html/` (docroot de `micronuba.net`) tiene stubs `include` hacia `sitepro/portal_web_micronuba/` (el repo real). Se agregaron los stubs faltantes para `cotizar.php` y `plagie.php` (antes solo existía para `index.php`, así que esas páginas no cargaban al acceder directo desde la raíz del dominio).
- `plagie.php` no tenía menú móvil en absoluto; se le agregó el mismo nav responsive que `index.php`.
- Se corrigió `build_release.sh` para excluir `node_modules` del paquete de despliegue (no se usa en runtime; su inclusión hacía los despliegues por FTP extremadamente lentos).
- **`node_modules` completo (2564 archivos) estaba comprometido en git por error** — se sacó del tracking (`.gitignore` actualizado), los archivos siguen intactos en disco.
- Se identificó y purgó un problema de **caché de Cloudflare desactualizada**: CSS e imágenes servían versiones de hasta 7 meses de antigüedad tras cada deploy manual. **Recomendación permanente: purgar caché de Cloudflare (Purge Everything) después de cada despliegue por FTP.**
- Se descubrió una regla heredada del "Neolo Website Builder" en `public_html/.htaccess` que reescribe `sitemap.xml` (y algunas rutas `js/`/`css/` legacy) hacia `sitepro/` directamente, no hacia `sitepro/portal_web_micronuba/` — hay que subir copia de `sitemap.xml` y `llms.txt` también a `public_html/` (y `sitemap.xml` además a `sitepro/` directo) para que resuelvan bien en la raíz del dominio.
- Cualquier ruta inexistente en `micronuba.net` cae en un "soft 404" (devuelve el HTML del home con status 200) — pendiente de corregir, vive en la config de Apache/Neolo fuera del repo.

### Fase 1 del Acta de Mejoras (nav, contenido, imágenes)
- Nav: acceso directo a PLAGIE (dropdown "Productos SaaS" con PLAGIE + Appits), botón de WhatsApp con mensaje prellenado, "Contáctanos" — rediseñado con jerarquía clara tras detectar que el nav original se rompía visualmente entre 768-1024px.
- Marquesina de texto eliminada; botón "¿Necesitas algo específico?" reubicado como la tarjeta más visible.
- "Gestión de Gimnasios" renombrado a "Appits" (aún con imagen genérica — no hay material real de Appits todavía).
- Iconos de redes sociales con colores de marca en vez de monocromáticos (en ambos footers, `index.php` y `plagie.php`).
- Se encontró un **pitch deck oficial de PLAGIE sin usar** en `assets/img/slides/` (16 imágenes) — se recortaron 4 de esas imágenes para reemplazar las fotos de IA en `plagie.php` (3 secciones) y en la tarjeta "Plagie" de Proyectos Destacados. El resto del deck sigue sin integrarse.
- Misión/Visión revisadas — el contenido actual ya es una versión ampliada del mismo texto del pitch deck; se decidió **no** tocarlo por ahora.

### Optimización para AI Crawlers / GEO
- Auditoría encontró que **Cloudflare bloqueaba con 403 a GPTBot, ClaudeBot, PerplexityBot, OAI-SearchBot, Amazonbot, Meta-ExternalAgent, cohere-ai y CCBot** — el sitio era invisible para IAs. Se corrigió en el dashboard de Cloudflare (Security/AI Crawl Control → "Bloquear los bots de entrenamiento de IA" → cambiado a "No bloquear"). Verificado en vivo: 6 de 7 bots probados ya acceden (queda pendiente Amazonbot, parece estar en otra categoría de Cloudflare sin resolver aún).
- Se agregaron `robots.txt`, `sitemap.xml` y `llms.txt` en la raíz del repo (nota: Cloudflare sigue sirviendo su propio `robots.txt` sintetizado por encima del nuestro, sin importar dónde se coloque el archivo de origen — es una función nativa de Cloudflare, no un bug).
- `canonical`, Open Graph y Twitter Card agregados a las 3 páginas.
- JSON-LD: `Organization` en `index.php`, `SoftwareApplication` en `plagie.php`.
- `<h1>` accesible (`sr-only`) agregado a `plagie.php`, que no tenía ninguno.

## Pendientes (To-Do)
- Resolver el bloqueo de **Amazonbot** en Cloudflare (revisar sección "Seguridad" dentro de "AI Crawl Control").
- Corregir el "soft 404" del hosting (fuera del repo — config Apache/Neolo).
- Integrar el resto del pitch deck de PLAGIE al sitio (hoy solo se usaron 4 de 16 imágenes).
- Punto 8 del acta: mostrar cobros automatizados (Wompi/PSE) en `plagie.php` — sin material aún.
- Punto 2 del acta: mascota/asistente para el chatbot — requiere diseño de personaje nuevo.
- Conseguir material real (capturas/fotos) para "Appits" — hoy usa una imagen de stock genérica.

## Estado Técnico
- **Producción real:** hosting compartido cPanel de Neolo (`homero.lineadns.com`), NO el VPS Docker. Acceso por FTPS (no hay SSH en este plan). Ver memoria del agente para credenciales y proceso de despliegue detallado.
- **Docker local:** funcional, integrado al gateway `micronuba-infra` bajo `portal.micronuba.local:8090` (vía `docker-compose.local.yml`).
- PHP: 8.2 (`php:8.2-apache`).
- Cloudflare: proxy activo delante de `micronuba.net`; gestiona caché, bots/AI Crawl Control y robots.txt de forma independiente al origen.
