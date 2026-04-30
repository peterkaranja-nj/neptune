FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git curl libpng-dev libonig-dev libxml2-dev zip unzip nodejs npm

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

# Create .env before anything
RUN cp .env.example .env

# Install composer - no scripts, no artisan calls during build
RUN composer install --no-dev --optimize-autoloader --no-scripts --no-interaction

# Dump autoload without running scripts
RUN composer dump-autoload --no-scripts

# Generate key using sed instead of artisan (avoids Laravel boot issues)
# Generate key without using artisan
RUN php -r "file_put_contents('.env', preg_replace('/^APP_KEY=.*$/m', 'APP_KEY=base64:'.base64_encode(random_bytes(32)), file_get_contents('.env')));"

# Build frontend
RUN npm install && npm run build

# Permissions
RUN chown -R www-data:www-data storage bootstrap/cache
RUN chmod -R 775 storage bootstrap/cache

# Apache config
RUN echo '<VirtualHost *:80>\n\
    DocumentRoot /var/www/html/public\n\
    <Directory /var/www/html/public>\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
</VirtualHost>' > /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite

# Runtime start script - artisan runs HERE where env vars from Render are available
RUN printf '#!/bin/bash\nset -e\nmkdir -p storage/framework/views storage/framework/cache/data storage/framework/sessions storage/logs bootstrap/cache\nchown -R www-data:www-data storage bootstrap/cache\nphp artisan package:discover --ansi\nphp artisan config:cache\nphp artisan route:cache\nphp artisan view:cache\napache2-foreground' > /start.sh && chmod +x /start.sh

EXPOSE 80

CMD ["/start.sh"]