FROM php:8.2-apache

# PDO系・MySQLドライバ・BCMath 拡張
RUN docker-php-ext-install pdo pdo_mysql mysqli bcmath

# Apache の rewrite モジュール有効化（学習の幅が広がる）
RUN a2enmod rewrite

# Composer（公式イメージからコピー）
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# nano インストール
RUN apt-get update && apt-get install -y nano && apt-get clean && rm -rf /var/lib/apt/lists/*

# 作業ディレクトリを設定
WORKDIR /var/www/html

# Composer の依存ファイルを先にコピー（キャッシュ効率UP）
COPY ../composer.json ../composer.lock ./

# vendor のインストール
RUN composer install --no-dev --prefer-dist --no-progress --no-suggest || true

# アプリケーション全体をコピー
COPY . .
