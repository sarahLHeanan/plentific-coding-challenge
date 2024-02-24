FROM php:8.2-fpm-alpine
 
WORKDIR /var/www/html
 
COPY public .
 
RUN docker-php-ext-install pdo pdo_mysql
 
RUN addgroup -g 1000 laravel && adduser -G laravel -g laravel -s /bin/sh -D laravel

RUN chown -R laravel:laravel .
 
USER laravel 