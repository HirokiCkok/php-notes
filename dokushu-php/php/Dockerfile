FROM php:8.2-apache

RUN docker-php-ext-install pdo pdo_mysql mysqli

# Apache の rewrite モジュール有効化（学習の幅が広がる）
RUN a2enmod rewrite

# Composer インストール
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer