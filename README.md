# laravel-rest-api
# Project Setup

Follow the steps below to set up this project on your local machine.
git clone https://github.com/ASHNP1709/laravel-rest-api.git

cd laravel-rest-api

composer install

Update .env File

php artisan key:generate

php artisan migrate

php artisan db:seed

Test Endpoints:
You can now test the endpoints with Postman:

Health Checkup: http://127.0.0.1:8000/api/health

List of Users: http://127.0.0.1:8000/api/users

In root url you can view the list of users
