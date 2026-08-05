# Usar uma imagem base PHP com FPM (Alpine)
FROM php:8.2-fpm-alpine

# Instalar Nginx + extensões PHP necessárias para Laravel (com PostgreSQL)
RUN apk add --no-cache \
    nginx \
    php-json \
    php-mbstring \
    php-tokenizer \
    php-xml \
    php-fileinfo \
    php-session \
    php-ctype \
    php-dom \
    php-zip \
    php-gd \
    php-opcache \
    php-bcmath \
    php-exif \
    php-intl \
    php-iconv \
    php-pdo_pgsql \
    php-fpm

# Copiar configuração do Nginx (usa variável $PORT em runtime — ver CMD abaixo)
COPY nginx.conf /etc/nginx/nginx.conf

# Diretório correto para PHP 8.2 no Alpine (era php83 antes — corrigido)
COPY www.conf /etc/php82/php-fpm.d/www.conf

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