# Estructura del Proyecto: Portal MicroNuba

Mapa detallado de la ubicación de los archivos clave.

## Raíz (Root)
- `index.php`: Punto de entrada principal.
- `plagie.php`: Página de producto PLAGIE (gestión educativa) — instituciones educativas en general, no solo colegios.
- `appits.php`: Página de producto Appits (gestión de talleres mecánicos y lavaderos) — producto real en `appits.cloud`, repo fuente `SAAS-Gestion_Talleres`.
- `cotizar.php`: Módulo de cotizaciones.
- `docker-compose.yml`: Configuración de servicios (Docker).
- `docker-compose.local.yml`: Overlay para integrarse al gateway compartido `micronuba-infra` (Traefik) en desarrollo local.
- `Dockerfile`: Definición de la imagen del contenedor.
- `build_release.sh`: Script de despliegue/construcción (excluye `node_modules`).
- `robots.txt`, `sitemap.xml`, `llms.txt`: metadata para crawlers tradicionales y de IA. Nota: en producción, `robots.txt` es interceptado y sustituido por Cloudflare independientemente del archivo de origen; `sitemap.xml` y `llms.txt` requieren copia adicional en `public_html/` del hosting (fuera de este repo) por una regla de reescritura heredada del Neolo Website Builder.

## Directorios Clave
- `api/`: Endpoint de la API (ej: `send_quote.php`).
- `config/`: Archivos de configuración y ejemplos.
- `lib/`: Librerías externas (PHPMailer).
- `assets/`: Archivos estáticos (CSS, JS, imágenes). `assets/css/input.css` es la fuente de Tailwind (compilar con `npm run build`/`npm run dev` para generar `assets/css/styles.css`); tamaños que se ajustan iterativamente en producción (ej. logos de hero, títulos) deben vivir como clase fija en `@layer utilities` (ej. `.h-plagie-hero`, `.hero-title`), nunca como `h-[Npx]`/`text-[Nrem]` arbitrario — ver `doc/contexto_gemini_web.md` para el porqué. El `<link>` a `styles.css` en las 4 páginas PHP lleva `?v=<?php echo filemtime(...) ?>` (cache-busting automático por fecha de modificación) — no quitarlo ni hay que purgar Cloudflare manualmente para cambios de CSS.
- `logs/`: Registros del sistema.
- `tests/`: Pruebas unitarias/funcionales.
- `tools/`: Utilidades internas.

## Sistema de Gobierno (.agent/)
- `rules/`: Manuales y scripts de restauración de contexto.
- `RULES.md`: Reglas y prohibiciones globales.
- `skills/`: Habilidades especializadas instaladas.
- `workflows/`: Flujos de trabajo automatizados.
