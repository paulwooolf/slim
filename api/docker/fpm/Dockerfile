FROM php:7.4.16-fpm

RUN DEBIAN_FRONTEND=noninteractive
RUN apt-get update && apt-get install -y --no-install-recommends \
    curl wget git zip unzip nano gnupg sed net-tools zlib1g-dev libicu-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl

RUN pecl install xdebug-3.0.3 \
    && docker-php-ext-enable xdebug

COPY ./conf.d/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

RUN apt-get update && apt-get install -y --no-install-recommends apt-utils \
    && HOST_IP="$(ifconfig | sed -En 's/127.0.0.1//;s/.*inet (addr:)?(([0-9]*\.){3}[0-9]*).*/\2/p')" \
    && sed -i "$ a\xdebug.client_host=${HOST_IP}" /usr/local/etc/php/conf.d/xdebug.ini \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

COPY --chown=www:www . /www

USER www
