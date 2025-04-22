#!/bin/bash

# Pull the latest changes
git pull

# Install/update dependencies
composer install --no-interaction --prefer-dist --optimize-autoloader

# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Run storage setup command
php artisan storage:setup

# Set proper permissions
chmod -R 775 storage bootstrap/cache public/images
chown -R www-data:www-data storage bootstrap/cache public/images

# Restart PHP-FPM (adjust the command based on your server setup)
# sudo systemctl restart php8.1-fpm  # Uncomment and adjust version as needed

echo "Deployment completed successfully!" 