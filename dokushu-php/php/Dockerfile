FROM php:8.2-apache

# PDO 系や MySQL ドライバ
RUN docker-php-ext-install pdo pdo_mysql mysqli

# BCMath 拡張
RUN docker-php-ext-install bcmath

# Apache の rewrite モジュール有効化（学習の幅が広がる）
RUN a2enmod rewrite

# Composer（公式イメージからコピー）
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Composer による依存インストールを高速化
COPY composer.json composer.lock ./
RUN composer install --no-dev --prefer-dist --no-progress --no-suggest || true