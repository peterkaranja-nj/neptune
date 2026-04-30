FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git curl libpng-dev libonig-dev libxml2-dev zip unzip nodejs npm

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Step 1: Create .env FIRST (before composer, before artisan)
RUN cp .env.example .env

# Step 2: Install PHP dependencies (vendor/ folder is created here)
RUN composer install --no-dev --optimize-autoloader

# Step 3: NOW artisan works because vendor/ exists
RUN php artisan key:generate

# Install Node dependencies and build assets
RUN npm install && npm run build

# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Apache configuration
RUN echo '<VirtualHost *:80>\n\
    DocumentRoot /var/www/html/public\n\
    <Directory /var/www/html/public>\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
</VirtualHost>' > /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite

# Start script — runs at runtime after Render injects real env vars
RUN printf '#!/bin/bash\nphp artisan key:generate --force\nphp artisan config:cache\nphp artisan route:cache\nphp artisan view:cache\napache2-foreground' > /start.sh && chmod +x /start.sh

EXPOSE 80

CMD ["/start.sh"]