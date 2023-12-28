#!/bin/bash

# Install Composer dependencies
composer install

# Copy .env.example to .env if .env doesn't exist
if [ ! -f .env ]; then
    cp .env.example .env
    # Generate the application key
    php artisan key:generate
fi

# Run database migrations and seeders
php artisan migrate --force
php artisan db:seed --force

# Start PHP-FPM
exec php-fpm
