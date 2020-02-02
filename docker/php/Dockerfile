FROM php:7.4-fpm-alpine
COPY php.ini /usr/local/etc/php/
RUN apk upgrade --update && \
  apk add --no-cache --no-progress oniguruma-dev
RUN docker-php-ext-install mysqli pdo_mysql mbstring
