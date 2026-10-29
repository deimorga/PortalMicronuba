# Estructura del Proyecto: Portal MicroNuba

Mapa detallado de la ubicación de los archivos clave.

## Raíz (Root)
- `index.php`: Punto de entrada principal.
- `plagie.php`: Página de producto PLAGIE (gestión educativa) — instituciones educativas en general, no solo colegios.
- `appits.php`: Página de producto Appits (gestión de talleres mecánicos y lavaderos) — producto real en `appits.cloud`, repo fuente `SAAS-Gestion_Talleres`.
- `cotizar.php`: Módulo de cotizaciones.
- `privacidad.php`: Política de Privacidad — requerida por Google Cloud para la app OAuth "MicroNuba Respaldos" (backups cifrados a Google Drive con scope `drive.file`). Enlazada desde el footer de las 4 páginas del sitio.
- `Dockerfile`: imagen PHP 8.3 + Apache con el código **copiado dentro**. Toma su configuración de `docker/apache/portal.conf` (sin listados de directorio, 404 para lo interno, redirecciones `www` → dominio principal y `/sitepro/portal_web_micronuba/…` → `/…`) y de `docker/php/portal.ini`.
- `.dockerignore`: lo que nunca entra en la imagen (`doc/`, `tests/`, `.agent/`, `.git`, `.env`…). Si se agrega una carpeta interna nueva, va aquí.
- `docker-compose.prod.yml`: **producción** en el VPS, detrás del gateway Traefik de `micronuba-infra`. Despliegue: `git pull --ff-only && docker compose -f docker-compose.prod.yml up -d --build`. Nada se edita en el servidor salvo el `.env`.
- `docker-compose.yml`: desarrollo local en `http://localhost:8080` (monta el repo en caliente).
- `docker-compose.local.yml`: overlay para integrarse al gateway compartido `micronuba-infra` (Traefik) en desarrollo local.
- `.env.example`: plantilla de las variables (SMTP y destinatario de cotizaciones). El `.env` real nunca va a git.
- `build_release.sh`: despliegue **antiguo** por FTP al hosting compartido. La migración al VPS terminó; se retira cuando se dé de baja la cuenta del hosting anterior.
- `robots.txt`, `sitemap.xml`, `llms.txt`: metadata para crawlers tradicionales y de IA. Nota: en producción, `robots.txt` es interceptado y sustituido por Cloudflare independientemente del archivo de origen. Toda página nueva se agrega a `sitemap.xml` y `llms.txt` en el mismo cambio que la crea.

## Directorios Clave
- `api/`: Endpoint de la API (ej: `send_quote.php`).
- `config/`: `config.php` está versionado y **no lleva secretos**: lee todo de variables de entorno (`getenv()`).
- `docker/`: configuración de Apache y PHP que usa el `Dockerfile` (no se publica en el sitio).
- `lib/`: Librerías externas (PHPMailer).
- `assets/`: Archivos estáticos (CSS, JS, imágenes). `assets/css/input.css` es la fuente de Tailwind (compilar con `npm run build`/`npm run dev` para generar `assets/css/styles.css`); tamaños que se ajustan iterativamente en producción (ej. logos de hero, títulos) deben vivir como clase fija en `@layer utilities` (ej. `.h-plagie-hero`, `.hero-title`), nunca como `h-[Npx]`/`text-[Nrem]` arbitrario — ver `doc/contexto_gemini_web.md` para el porqué. El `<link>` a `styles.css` en las 4 páginas PHP lleva `?v=<?php echo filemtime(...) ?>` (cache-busting automático por fecha de modificación) — no quitarlo ni hay que purgar Cloudflare manualmente para cambios de CSS.
- `logs/`: ya no se usa en producción (el formulario registra en la salida del contenedor, `docker logs`).
- `tests/`: Pruebas unitarias/funcionales.

## Sistema de Gobierno (.agent/)
- `rules/`: Manuales y scripts de restauración de contexto.
- `RULES.md`: Reglas y prohibiciones globales.
- `skills/`: Habilidades especializadas instaladas.
- `workflows/`: Flujos de trabajo automatizados.
