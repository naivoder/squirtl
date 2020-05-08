# Dockerfile
FROM php:7-apache
MAINTAINER Naivoder <naivoder@gmail.com>

# Copy application source files
COPY index.php /var/www/html/
COPY start-apache /usr/local/bin/
RUN chown -R www-data:www-data /var/www

# Run server in background
CMD ["/usr/local/bin/start-apache"]
