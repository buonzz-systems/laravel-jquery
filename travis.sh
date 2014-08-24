#! /bin/sh

composer create-project laravel/laravel laravel
mkdir laravel/workbench
mkdir laravel/workbench/buonzz
mkdir laravel/workbench/buonzz/laravel-jquery

rsync -av . laravel/workbench/buonzz/laravel-jquery --exclude=laravel --exclude=vendor --exclude=.git --exclude=travis.sh
cd laravel
php artisan dump-autoload
echo "App::register('Buonzz\LaravelJquery\LaravelJqueryServiceProvider');" >> app/start/global.php
php artisan asset:publish --bench=buonzz/laravel-jquery


