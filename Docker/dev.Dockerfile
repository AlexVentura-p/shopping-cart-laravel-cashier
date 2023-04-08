FROM php:8.1.2-fpm as php
ARG work-dir

#php libraries
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    vim \
    unzip \
    libpng-dev \
    libjpeg-dev \
    libjpeg62-turbo-dev

WORKDIR $work-dir

# php extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql gd && docker-php-ext-enable pdo_mysql gd
RUN docker-php-ext-configure gd --enable-gd --with-jpeg

#composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

#set permissions for folders in docker
#chown -R www-data:www-data storage/logs
#chown -R www-data:www-data storage/framework

#install npm builds
#npm install
#npm run dev / npm run build
