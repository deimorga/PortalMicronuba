FROM php:8.2-apache

# Enable mod_rewrite for nice URLs
RUN a2enmod rewrite

# Copy source files to specific path to match production
COPY . /var/www/html/sitepro/portal_web_micronuba/

# Set working directory
WORKDIR /var/www/html/sitepro/portal_web_micronuba

# Expose port 80
EXPOSE 80
