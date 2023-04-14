FROM php:8.2-fpm

RUN apt-get update \
    && apt-get install -y --no-install-recommends libmcrypt-dev libpq-dev libzip-dev libxml2-dev

RUN docker-php-source extract \
    && docker-php-ext-install bcmath pdo_mysql zip \
    && docker-php-source delete

WORKDIR /opt/crm_test

RUN apt-get update \
    && apt-get install --no-install-recommends -y unzip git

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/bin --filename=composer \
    && rm composer-setup.php
