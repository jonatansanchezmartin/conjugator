FROM php:8.4-fpm

RUN docker-php-ext-install pdo pdo_mysql && docker-php-ext-enable pdo_mysql

COPY --from=composer:2.8 /usr/bin/composer /usr/bin/composer

RUN curl -1sLf 'https://dl.cloudsmith.io/public/symfony/stable/setup.deb.sh' | bash
RUN apt -y install symfony-cli zip unzip

WORKDIR /code