FROM php:8.1-apache
RUN apt-get update && apt-get install -y
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

COPY --from=composer/composer /usr/bin/composer /usr/bin/composer
# COPY /php /usr/local/etc

RUN cd /etc/apache2/mods-available
RUN a2enmod rewrite
RUN rm -f /etc/apache2/apache2.conf
COPY apache2.conf /etc/apache2

