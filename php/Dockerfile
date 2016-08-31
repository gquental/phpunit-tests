FROM php:fpm
RUN apt-get update && apt-get install -y git zip unzip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www

COPY ./application/composer.json .
RUN composer install

COPY ./application .
RUN chown -R www-data:www-data /var/www
USER www-data

VOLUME /var/www
