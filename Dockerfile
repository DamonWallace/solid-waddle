# Use a PHP 8.1 image as the base
FROM php:8.1-fpm

# Set the working directory in the container
WORKDIR /var/www/html

# Copy application files
COPY . .

# Install necessary extensions or dependencies
RUN apt-get update \
    && apt-get install -y \
        git \
        unzip \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
    && docker-php-ext-install pdo_mysql gd

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install PHP dependencies
RUN composer install --no-interaction

# Set proper permissions if needed
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose the port
EXPOSE 9000

# Start PHP-FPM
CMD ["php-fpm"]
