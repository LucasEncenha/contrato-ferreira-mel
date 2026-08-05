# Usar uma imagem base PHP com FPM (Alpine)
FROM php:8.2-fpm-alpine

# Instalar Nginx + bibliotecas de sistema necessárias para compilar as extensões PHP
RUN apk add --no-cache \
    nginx \
    postgresql-dev \
    libzip-dev \
    libpng-dev \
    freetype-dev \
    jpeg-dev \
    icu-dev \
    oniguruma-dev \
    libxml2-dev \
    bash

# Compilar e habilitar apenas as extensões que NÃO vêm por padrão na imagem oficial
# (pdo, tokenizer, xml, json, ctype, session, dom, fileinfo já vêm prontos)
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        pdo_pgsql \
        mbstring \
        zip \
        gd \
        bcmath \
        intl \
        opcache \
        exif

# Copiar configuração do Nginx (usa variável $PORT em runtime — ver CMD abaixo)
COPY nginx.conf /etc/nginx/nginx.conf

# Diretório correto do PHP-FPM oficial (não é /etc/phpXX, que é do PHP do Alpine)
COPY www.conf /usr/local/etc/php-fpm.d/www.conf

# Definir o diretório de trabalho
WORKDIR /var/www/html

# Copiar o código da aplicação
COPY . /var/www/html

# Instalar Composer e as dependências (sem dev, otimizado)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Configurar permissões de pasta (storage e cache precisam ser graváveis)
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 755 /var/www/html/public

# Garantir que /var/run existe com permissão para o php-fpm criar o socket Unix
RUN mkdir -p /var/run && chown www-data:www-data /var/run

# Expor a porta (documentação apenas — o Render injeta $PORT em runtime)
EXPOSE 80

# Em runtime: ajusta o Nginx pra escutar na porta que o Render definir,
# roda as otimizações do Laravel (agora com as env vars reais disponíveis),
# aplica as migrations e sobe nginx + php-fpm
CMD ["sh", "-c", "\
    sed -i \"s/listen 80;/listen ${PORT:-80};/\" /etc/nginx/nginx.conf && \
    php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache && \
    php artisan migrate --force && \
    nginx && \
    php-fpm -F \
"]