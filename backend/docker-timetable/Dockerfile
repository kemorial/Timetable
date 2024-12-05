FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    git\
    curl\
    zip\
    unzip

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/bin/

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN install-php-extensions pdo pdo_mysql
RUN pecl install xdebug && docker-php-ext-enable xdebug
WORKDIR /var/www
