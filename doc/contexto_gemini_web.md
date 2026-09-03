# Contexto de Sesión: Portal MicroNuba

**Última Actualización:** 2026-09-03

## Estado Actual
El portal tiene **dos páginas de producto completas** (`plagie.php` y `appits.php`), stack tecnológico con marcas reales de Anthropic/Claude, optimización de visibilidad para AI crawlers extendida a ambos productos, fotos reales del liderazgo, y desde el 02-03/09/2026 **el CSS ya no depende de purgas manuales de Cloudflare** (cache-busting automático). Todo desplegado y verificado en producción (`https://micronuba.net`).

## Logros de la Sesión (2026-09-02/03)

### Fotos reales del Liderazgo
- Se reemplazaron `assets/img/team/deiby_moreno.jpeg` y `assets/img/team/andres_tovar.jpeg` por retratos profesionales nuevos (recortados/redimensionados a 600x600 centrados en cara+hombros para el círculo de 128px de la sección Liderazgo).

### Título del hero reducido 20%
- El `<h1>` de la portada ("Tu negocio en la nube") usaba `text-6xl md:text-7xl` (60px/72px). Se redujo exactamente 20% a petición del usuario: **48px móvil / 57.6px escritorio**, vía una clase fija `.hero-title` en `input.css` (mismo patrón que `.h-plagie-hero`).

### Fix definitivo de caché de CSS: versión automática en el link
- **Bug encontrado durante este mismo cambio:** tras desplegar el nuevo `styles.css` con `.hero-title`, Cloudflare siguió sirviendo la hoja de estilos vieja (sin esa clase) mientras el HTML nuevo ya no traía `text-6xl`/`md:text-7xl` — el resultado fue un `<h1>` sin NINGUNA clase de tamaño coincidente, cayendo al valor por defecto del navegador (~16px). Esto pareció al usuario un "-20% muy exagerado", pero en realidad era una desincronización HTML-nuevo/CSS-viejo, no el valor real elegido. Ni siquiera una purga de Cloudflare "Purge Everything" (confirmada por el usuario en el dashboard) resolvió el problema de inmediato — quedó un objeto stale en al menos un nodo de borde varios minutos después de purgar.
- **Fix aplicado (permanente, no solo para este caso):** las 4 páginas (`index.php`, `plagie.php`, `cotizar.php`, `appits.php`) ahora referencian el CSS con versión automática basada en la fecha de modificación del archivo:
  ```php
  <link rel="stylesheet" href="assets/css/styles.css?v=<?php echo @filemtime(__DIR__ . '/assets/css/styles.css') ?: time(); ?>">
  ```
  Cada despliegue que toque `styles.css` cambia su `mtime` en el servidor → cambia automáticamente el query string `?v=` → Cloudflare lo trata como una URL nueva nunca cacheada → **MISS garantizado, sin depender de una purga manual que puede tardar en propagar.**
  - **Regla para el futuro:** ya no hace falta pedirle al usuario que purgue Cloudflare después de un deploy que solo cambia `styles.css` — el cache-busting lo resuelve solo. La purga manual sigue siendo necesaria para imágenes/otros assets estáticos que no llevan este parámetro de versión (ver debajo).
- Verificado con Chrome DevTools MCP en un contexto sin caché previa: `getComputedStyle(h1).fontSize` = `57.6px` en viewport ≥768px, coincide exactamente con lo esperado.

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
- Cloudflare: proxy activo delante de `micronuba.net`; gestiona caché, bots/AI Crawl Control y robots.txt de forma independiente al origen.
  - **`styles.css` ya NO necesita purga manual** (cache-busting automático por `?v=filemtime`, ver arriba).
  - **Imágenes y otros assets estáticos SÍ siguen necesitando purga manual de Cloudflare** ("Purge Everything") tras cada despliegue que los toque.
