# short_url
A small system that generate short urls

This system will generate short links using your own domain

How to use:
Clone this repo

Install dependencies with composer
composer install

or

composer update

Copy .env-example to .env

Remove the lines for mysql and add (if you want to use mysql, don´t remove the lines, and add your db information):
DB_CONNECTION=sqlite
DB_FOREIGN_KEYS=true

Run the migrations
php artisan migrate

Clear the caches
php artisan cache:clear
php artisan config:clear

Create permissions:
php artisan permission:create-permission admin
php artisan permission:create-permission user

Check the folder and files permission if matches with your server (nginx or apache), if it needs change, run:
chown -R www-data:www-data folder

Change www-data and folder with your server informations

Access the address of the aplication and register the user, after the register, change the table in the database mode_has_permissions, and change the line of the id of your user to match with the ID of the permission, for example, if you have only one user and created the permission in the same order described above, your admin id must be 1, so change the first column to 1
