FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git curl libpng-dev libonig-dev libxml2-dev zip unzip nodejs npm

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

# Create .env before composer
RUN cp .env.example .env

# Install composer dependencies but skip scripts (avoids package:discover error)
RUN composer install --no-dev --optimize-autoloader --no-scripts

# Now generate key (vendor exists now)
RUN php artisan key:generate

#  Now run package discover manually with APP_BASE_PATH set
RUN php artisan package:discover --ansi

# Build frontend assets
RUN npm install && npm run build

# Permissions
RUN chown -R www-data:www-data storage bootstrap/cache

# Apache config
RUN echo '<VirtualHost *:80>\n\
    DocumentRoot /var/www/html/public\n\
    <Directory /var/www/html/public>\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
</VirtualHost>' > /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite

RUN printf '#!/bin/bash\nphp artisan key:generate --force\nphp artisan config:cache\nphp artisan route:cache\nphp artisan view:cache\napache2-foreground' > /start.sh && chmod +x /start.sh

EXPOSE 80

CMD ["/start.sh"]