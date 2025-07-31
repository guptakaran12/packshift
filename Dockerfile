FROM php:8.2-fpm

# Dependencies install कर रहे हैं
RUN apt-get update && apt-get install -y \
    git curl zip unzip libonig-dev libxml2-dev libzip-dev libpng-dev \
    && docker-php-ext-install pdo_pgsql mbstring exif pcntl bcmath gd zip

# Composer copy कर रहे हैं
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Code के लिए working directory
WORKDIR /var/www

# Code copy कर रहे हैं
COPY . .

# Laravel की dependencies install कर रहे हैं
RUN composer install --no-dev --optimize-autoloader

# Permission सेट कर रहे हैं
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage

EXPOSE 8000

# Server चालू करने का command
CMD php artisan serve --host=0.0.0.0 --port=8000
