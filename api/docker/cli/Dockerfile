FROM php:7.4.16-cli

# install packages and extension
RUN DEBIAN_FRONTEND=noninteractive
RUN apt-get update && apt-get install -y --no-install-recommends \
		curl wget git zip unzip nano gnupg sed net-tools

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/bin --filename-composer --quiet

RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

COPY --chown=www:www . /www

USER www
