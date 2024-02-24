FROM composer:latest
 
RUN addgroup -g 1000 laravel && adduser -G laravel -g laravel -s /bin/sh -D laravel

RUN chown -R laravel:laravel .

USER laravel 

WORKDIR /var/www/html
 
ENTRYPOINT [ "composer" ]
#ENTRYPOINT [ "composer", "--ignore-platform-reqs" ]