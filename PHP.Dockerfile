FROM php:fpm

RUN docker-php-ext-install pdo pdo_mysql

RUN pecl install xdebug && docker-php-ext-enable xdebug

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli