FROM php:7.1-apache

RUN apt-get update -y && \
    apt-get install -y --no-install-recommends libpq-dev \
                                               libmcrypt-dev \
                                               libreadline-dev \
                                               curl \
                                               zip \
                                               unzip \
                                               zlib1g-dev \
                                               libicu-dev \
                                               g++ \
                                               git \
                                               zip \
                                               unzip \
                                               libpng-dev \
                                               libfreetype6-dev \
                                               libjpeg62-turbo-dev \
                                               libxpm-dev \
                                               libvpx-dev && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-configure intl
RUN docker-php-ext-configure gd \
    		--with-freetype-dir=/usr/lib/x86_64-linux-gnu/ \
    		--with-jpeg-dir=/usr/lib/x86_64-linux-gnu/ \
    		--with-xpm-dir=/usr/lib/x86_64-linux-gnu/ \
    		--with-vpx-dir=/usr/lib/x86_64-linux-gnu/
RUN docker-php-ext-install mbstring pdo pdo_mysql mcrypt intl zip gd
RUN docker-php-source extract
RUN docker-php-source delete

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN mv composer.phar /usr/local/bin/composer

COPY docker/php.ini /usr/local/etc/php/
COPY docker/apache_config /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite
