# Use PHP 8.2 with Apache
FROM php:8.2-apache

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    curl \
    libicu-dev \
    && docker-php-ext-install pdo_mysql zip mbstring exif pcntl bcmath gd intl calendar

# Enable Apache modules
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy Composer from official image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy application files
COPY . .

# Install PHP dependencies
RUN composer install --no-interaction --optimize-autoloader --no-dev

# Set directory permissions
RUN chown -R www-data:www-data storage bootstrap/cache
RUN chmod -R 775 storage bootstrap/cache

# Expose port 80
EXPOSE 80

# Set Apache DocumentRoot to the public directory of Laravel/Bagisto
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

# Ensure Apache loads index.php by default
RUN sed -i 's|DirectoryIndex .*|DirectoryIndex index.php index.html|' /etc/apache2/apache2.conf

# Start Apache in the foreground
CMD ["apache2-foreground"]
