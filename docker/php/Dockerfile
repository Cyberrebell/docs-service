FROM php:7.2-fpm-alpine

RUN set -xe \
    && apk add --no-cache --virtual .build-deps \
    $PHPIZE_DEPS \
    && docker-php-ext-enable opcache \
    && rm -rf /tmp/*
