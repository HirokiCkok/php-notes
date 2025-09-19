FROM php:8.2-apache

# Apache の rewrite モジュール有効化（学習の幅が広がる）
RUN a2enmod rewrite

# MariaDB 接続に必要な PHP 拡張を導入
RUN docker-php-ext-install pdo pdo_mysql