# Imagen del portal: PHP 8.3 + Apache, con el código copiado dentro.
# Producción: docker-compose.prod.yml · Desarrollo: docker-compose.yml (monta el repo encima).
FROM php:8.3-apache

RUN a2enmod rewrite headers \
    && mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

COPY docker/apache/portal.conf /etc/apache2/conf-available/zz-portal.conf
COPY docker/php/portal.ini "$PHP_INI_DIR/conf.d/portal.ini"
RUN a2enconf zz-portal

# El .dockerignore deja fuera todo lo interno (doc/, tests/, .git, .env…)
COPY . /var/www/html/
RUN rm -rf /var/www/html/docker

EXPOSE 80
