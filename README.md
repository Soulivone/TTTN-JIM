######
### required
PHP 8.2.5
Node v20.9.0
npm 10.4.0

# step 1
composer install

# step 2
npm install

# step 3
php artisan migrate

# step 4 run server (*)
php artisan serve

# step 5 render css (*)
npm run dev

#####
## before pull

# step 1
npm install

# step 2
php artisan migrate:refresh

# step 3
npm run dev

# step 4
php artisan serve
