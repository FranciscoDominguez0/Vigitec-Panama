FROM php:8.2-apache

# Habilitar el módulo de reescritura de Apache
RUN a2enmod rewrite

# Instalar msmtp para interceptar correos locales
RUN apt-get update && apt-get install -y msmtp msmtp-mta

# Configurar PHP para usar msmtp
RUN echo "sendmail_path = /usr/bin/msmtp -t" > /usr/local/etc/php/conf.d/sendmail.ini

# Redirigir todos los correos al servicio local 'mailhog'
RUN echo "account default\nhost mailhog\nport 1025\nauto_from on" > /etc/msmtprc
