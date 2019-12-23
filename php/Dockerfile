FROM php:7.4-apache

RUN docker-php-ext-install pdo_mysql \
    && docker-php-ext-install mysqli \
    && pecl channel-update pecl.php.net \
    && pecl install xdebug-2.8.0 \
    && docker-php-ext-enable xdebug

ADD ./php.ini /usr/local/etc/php/php.ini
