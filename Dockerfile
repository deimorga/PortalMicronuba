# Imagen del portal: PHP 8.3 + Apache, con el código copiado dentro.
# Producción: docker-compose.prod.yml · Desarrollo: docker-compose.yml (monta el repo encima).
# Versión EXACTA, no la etiqueta flotante 8.3-apache: el despliegue hace
# `up -d --build` sin `--pull`, y con una etiqueta flotante el servidor puede
# reutilizar una imagen vieja que tenga en caché. Para actualizar PHP, subir
# este número y el mínimo del control de abajo.
FROM php:8.3.36-apache

# El build se rompe si la base queda por debajo de la versión mínima admitida
RUN php -r 'exit(version_compare(PHP_VERSION, "8.3.36", ">=") ? 0 : 1);' \
    || (echo "FALLO: PHP anterior a 8.3.36, versión mínima admitida" && exit 1)

RUN a2enmod rewrite headers \
    && mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

COPY docker/apache/portal.conf /etc/apache2/conf-available/zz-portal.conf
COPY docker/php/portal.ini "$PHP_INI_DIR/conf.d/portal.ini"
RUN a2enconf zz-portal

# El .dockerignore deja fuera todo lo interno (doc/, tests/, .git, .env…)
COPY . /var/www/html/
RUN rm -rf /var/www/html/docker

EXPOSE 80
