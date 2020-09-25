FROM php:7.4-fpm 
RUN apt-get update
RUN apt-get install -y libmcrypt-dev \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install mcrypt pdo_pgsql pgsql

