# Gunakan image PHP resmi dengan Apache
FROM php:8.2-apache

# 1. Install dependencies sistem
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# 2. Aktifkan mod_rewrite Apache untuk routing Laravel
RUN a2enmod rewrite

# 3. Set Working Directory
WORKDIR /var/www/html

# 4. Copy file proyek ke dalam container
COPY . .

# 5. Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# 6. Set Permission untuk folder storage dan cache
# Penting agar Laravel bisa menulis log dan file session
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# 7. Konfigurasi Apache untuk menggunakan folder 'public' Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf
RUN sed -ri -e 's!/var/www/php!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# 8. Sesuaikan port Apache dengan variabel $PORT dari Render
RUN sed -i 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

# 9. Jalankan perintah optimasi saat container menyala
CMD php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache && \
    apache2-foreground