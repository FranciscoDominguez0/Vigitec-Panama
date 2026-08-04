FROM php:8.2-apache

# Configurar la carpeta pública (public/) como DocumentRoot de Apache
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Habilitar el módulo de reescritura y AllowOverride en Apache para que procese .htaccess
RUN a2enmod rewrite \
    && sed -ri -e 's!AllowOverride None!AllowOverride All!g' /etc/apache2/apache2.conf

# Instalar msmtp para interceptar correos locales
RUN apt-get update && apt-get install -y msmtp msmtp-mta

# Configurar PHP para usar msmtp
RUN echo "sendmail_path = /usr/bin/msmtp -t" > /usr/local/etc/php/conf.d/sendmail.ini

# Redirigir todos los correos al servicio local 'mailhog'
RUN echo "account default\nhost mailhog\nport 1025\nauto_from on" > /etc/msmtprc
