# Usar uma imagem base PHP com Nginx (FPM)
FROM php:8.2-fpm-alpine

# Instalar extensões PHP necessárias para Laravel
RUN apk add --no-cache \
    nginx \
    php-json \
    php-mbstring \
    php-pdo_mysql \
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
    php-mysqli \
    php-fpm

# Copiar o arquivo de configuração do Nginx
COPY nginx.conf /etc/nginx/nginx.conf

# Copiar o arquivo de configuração PHP-FPM
COPY www.conf /etc/php82/php-fpm.d/www.conf

# Definir o diretório de trabalho
WORKDIR /var/www/html

# Copiar o código da aplicação
COPY . /var/www/html

# Configurar permissões de pasta (para storage e cache)
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 755 /var/www/html/public

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Instalar dependências do Composer
RUN composer install --no-dev --optimize-autoloader

# Expor a porta 80 para o Nginx
EXPOSE 80

CMD ["sh", "-c", "nginx && php-fpm"]