FROM php:8.0.3-apache
COPY php.ini /usr/local/etc/php/
COPY index.php /var/www/html
