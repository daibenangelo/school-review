#!/usr/bin/env bash
echo "Running composer"
composer global require hirak/prestissimo
composer install --working-dir=/var/www/html

echo "Caching config..."
php artisan config:cache

echo "Caching routes..."
php artisan route:cache

echo "Running migrations..."
php artisan migrate --force

echo "Running seeders"
php artisan db:seed --class=ClassesTableSeeder --force
php artisan db:seed --class=FacultiesEducTableSeeder --force
php artisan db:seed --class=FacultiesTableSeeder --force
php artisan db:seed --class=OrdersProductsTableSeeder --force
php artisan db:seed --class=OrdersTableSeeder --force
php artisan db:seed --class=ProductsTableSeeder --force
php artisan db:seed --class=StudentsClassesTableSeeder --force
php artisan db:seed --class=StudentsPhotosTableSeeder --force
php artisan db:seed --class=StudentsTableSeeder --force
php artisan db:seed --class=SubjectsTableSeeder --force
php artisan db:seed --class=UsersTableSeeder --force