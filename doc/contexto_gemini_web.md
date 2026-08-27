# Contexto de Sesión: Portal MicroNuba

**Última Actualización:** 2026-08-27

## Estado Actual
El portal ahora tiene **dos páginas de producto completas** (`plagie.php` y `appits.php`), stack tecnológico con marcas reales de Anthropic/Claude, y optimización de visibilidad para AI crawlers extendida a ambos productos. Todo desplegado y verificado en producción (`https://micronuba.net`).

## Logros de la Sesión (2026-08-26/27)

### Página nueva: Appits (`appits.php`)
- Appits es el nombre comercial real de una plataforma SaaS ya en producción en `appits.cloud` (repo separado `SAAS-Gestion_Talleres`/`/Users/deibymorenogarcia/Proyectos/SAAS-Gestion_Talleres`) — gestión integral para **talleres mecánicos y lavaderos** (agendamiento, recepción, diagnóstico, ejecución, portal del cliente, facturación, inventario integrado con el SaaS de Inventarios de MicroNuba).
- Se creó `appits.php` clonando la estructura de `plagie.php` (mismo nav, SEO, JSON-LD), con **capturas reales del producto** tomadas de `doc/Diseños/` del repo de Talleres (kanban de ejecución, portal del cliente, dashboard financiero) — una incluso se re-renderizó a mano desde su `code.html` fuente para lograr resolución nítida (la captura pre-generada era de solo 134px de ancho).
- Se agregó el **isotipo oficial de Appits** (`assets/img/icons/appits_isotipo.png`, tomado de `web_frontend/src/assets/branding/` del repo de Talleres) en vez de un ícono genérico.
- El botón "Solicitar Demo" de PLAGIE y Appits ahora abre WhatsApp directo con mensaje prellenado específico por producto, en vez de ir a `cotizar.php`.
- Los enlaces "Appits" del dropdown y la tarjeta de portada ya apuntan a `appits.php` (antes anclaban a `#saas` en la portada).

### Stack Tecnológico: marca real de Anthropic/Claude
- Se agregaron **Claude** y **Claude Code** al stack tecnológico de la portada, usando los **logos oficiales reales** (sunburst de Claude en `#D97757`, isotipo "A" de Anthropic) obtenidos de Simple Icons — corregido después de un primer intento con íconos genéricos de Font Awesome que el usuario (con toda razón) rechazó por no ser la marca real.

### Ampliación de posicionamiento
- **Appits**: de "talleres mecánicos" a "talleres mecánicos y lavaderos" en todo el copy (título, meta tags, JSON-LD, hero). Se agregó **Agendamiento de Citas** como funcionalidad destacada — **ojo: ese módulo específico seguía solo en fase de diseño en el repo de Talleres al momento de escribir esto** (sin código), presentado como disponible por decisión explícita del usuario tras advertírselo.
- **PLAGIE**: de "colegios" a "instituciones educativas" en todo el copy (título, meta tags, JSON-LD, hero).
- Nuevo mensaje de bienvenida de PLAGIE, más específico y vendedor, siguiendo el mismo patrón "de X a Y" que ya tenía Appits.

### AI Crawlers / GEO — extendido a los productos
- `sitemap.xml` y `llms.txt` se habían quedado desactualizados tras crear `appits.php` (invisible en ambos canales pese a que la página sí era accesible por enlaces) — corregido.
- JSON-LD `Organization` de la portada ahora declara `makesOffer` con PLAGIE y Appits, reforzando la relación empresa↔productos en el grafo de conocimiento.

### Lección importante de infraestructura: nombres de clase CSS y caché
- **Bug real encontrado:** el logo del nav en `plagie.php`/`appits.php` usaba la clase genérica `container` de Tailwind (anchos escalonados por breakpoint) en vez de `max-w-7xl` fijo como en `index.php` — comprimía el nav visiblemente en ciertos anchos de pantalla. Unificado a `max-w-7xl` en las 3 páginas.
- **Lección de fondo (la más importante de la sesión):** al ajustar el tamaño del logo del hero de PLAGIE varias veces, cada ajuste usó una clase Tailwind de valor arbitrario **distinta** (`h-20` → `h-24` → `h-[86px]` → `h-[95px]` → `h-[100px]` → `h-[90px]`...). Cualquier caché (navegador o Cloudflare) con la versión de CSS anterior **no tenía ninguna regla que coincidiera** con la clase nueva — no una versión desactualizada, cero coincidencia — así que la imagen perdía todo control de tamaño y se mostraba a su tamaño natural (grande). Esto generaba una falsa sensación de "solo dos tamaños posibles" (controlado vs. sin control) que costó mucho diagnosticar, incluyendo pruebas cruzadas en Safari/Chrome/Opera/iPad.
  - **Fix aplicado:** se reemplazó por una clase CSS fija y reutilizable (`.h-plagie-hero`, definida en `assets/css/input.css`, mismo patrón que ya existía para `.h-logo-90` del nav) cuyo valor se edita en el CSS sin cambiar el nombre de la clase en el HTML. Un caché desactualizado ahora en el peor caso muestra el tamaño anterior, nunca el descontrol total.
  - **Regla para el futuro: nunca usar `h-[Npx]` (valores arbitrarios de Tailwind) para algo que se va a estar ajustando iterativamente en producción.** Usar una clase fija en `input.css` desde el principio.
  - Valor final acordado para el logo del hero de PLAGIE: **120px** (`.h-plagie-hero`), confirmado en producción sin caché en múltiples navegadores/dispositivos (Chrome, Safari, Opera, iPad).

## Pendientes (To-Do)
- Resolver el bloqueo de **Amazonbot** en Cloudflare (sección "Seguridad" dentro de "AI Crawl Control").
- Corregir el "soft 404" del hosting (fuera del repo — config Apache/Neolo).
- Integrar el resto del pitch deck de PLAGIE al sitio (siguen sin usarse 12 de 16 imágenes).
- Punto 8 del acta: mostrar cobros automatizados (Wompi/PSE) en `plagie.php` — sin material aún.
- Punto 2 del acta: mascota/asistente para el chatbot — requiere diseño de personaje nuevo.
- Conseguir material real (capturas/fotos) para "Appits" en la tarjeta de Proyectos Destacados de la portada — hoy usa una imagen de stock genérica en el fondo.
- Si se retoma Agendamiento de Citas como funcionalidad "real" en el portal, verificar si ya avanzó de fase de diseño a código en el repo de Talleres.

## Estado Técnico
- **Producción real:** hosting compartido cPanel de Neolo (`homero.lineadns.com`), NO el VPS Docker. Acceso por FTPS (no hay SSH en este plan). Ver memoria del agente para credenciales y proceso de despliegue detallado.
- **Docker local:** funcional, integrado al gateway `micronuba-infra` bajo `portal.micronuba.local:8090` (vía `docker-compose.local.yml`) cuando el gateway está disponible; también puede correr standalone en `:8080` si hay conflicto de IP en la red compartida con otro proyecto.
- PHP: 8.2 (`php:8.2-apache`).
- Cloudflare: proxy activo delante de `micronuba.net`; gestiona caché, bots/AI Crawl Control y robots.txt de forma independiente al origen. **Siempre purgar caché (Purge Everything) después de cada despliegue que toque CSS.**
