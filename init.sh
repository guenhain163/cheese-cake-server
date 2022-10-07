#bin/bash
rm -rf ./bootstrap/cache/*
rm -rf ./storage/framework
mkdir ./storage/framework
mkdir ./storage/framework/sessions
mkdir ./storage/framework/views
mkdir ./storage/framework/cache
docker-compose up --build -d
docker-compose exec app composer update
docker-compose exec app composer install --no-scripts
docker-compose exec app php artisan key:generate
docker-compose exec app php artisan optimize
