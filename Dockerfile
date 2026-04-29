FROM php:8.2-apache

# Enable mod_rewrite for nice URLs
RUN a2enmod rewrite

# Change document root to our subfolder
ENV APACHE_DOCUMENT_ROOT /var/www/html/sitepro/portal_web_micronuba
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Copy source files to specific path to match production
COPY . /var/www/html/sitepro/portal_web_micronuba/

# Set working directory
WORKDIR /var/www/html/sitepro/portal_web_micronuba

# Expose port 80
EXPOSE 80
