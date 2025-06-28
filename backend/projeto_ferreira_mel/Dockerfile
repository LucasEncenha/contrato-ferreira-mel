# Usar uma imagem base PHP com Nginx (FPM)
# Opcional: Considere mudar para php:8.3-fpm-alpine para ser explícito
FROM php:8.2-fpm-alpine 

# Instalar extensões PHP necessárias para Laravel
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

# Copiar o arquivo de configuração do Nginx
COPY nginx.conf /etc/nginx/nginx.conf

# ***** CORREÇÃO AQUI: AJUSTADO O DIRETÓRIO DO PHP-FPM PARA 8.3 *****
COPY www.conf /etc/php83/php-fpm.d/www.conf

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

# Limpar caches do Laravel para garantir que as configurações mais recentes sejam usadas
RUN php artisan cache:clear \
    && php artisan config:clear \
    && php artisan route:clear \
    && php artisan view:clear

# Expor a porta 80 para o Nginx
EXPOSE 80

CMD ["sh", "-c", "nginx && php-fpm"]