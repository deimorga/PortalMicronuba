# Estructura del Proyecto: Portal MicroNuba

Mapa detallado de la ubicación de los archivos clave.

## Raíz (Root)
- `index.php`: Punto de entrada principal.
- `plagie.php`: Módulo relacionado con funcionalidad Plagie.
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
- `assets/`: Archivos estáticos (CSS, JS, imágenes).
- `logs/`: Registros del sistema.
- `tests/`: Pruebas unitarias/funcionales.
- `tools/`: Utilidades internas.

## Sistema de Gobierno (.agent/)
- `rules/`: Manuales y scripts de restauración de contexto.
- `RULES.md`: Reglas y prohibiciones globales.
- `skills/`: Habilidades especializadas instaladas.
- `workflows/`: Flujos de trabajo automatizados.
