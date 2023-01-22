# docker-compose-laravel-example

This is an example showing how to run a PHP Laravel application on docker containers, based on the article:
https://www.digitalocean.com/community/tutorials/how-to-install-and-set-up-laravel-with-docker-compose-on-ubuntu-22-04


1. Create your .env file (based on .env.example). Run:

    `cp .env.example .env`


2. In the `.env` file, set the variables `DOCKER_USER_NAME` and `DOCKER_USER_ID`. In the terminal, run `id -un` and `id -u` to get the values.


3. To start all containers, run:

    `docker compose up -d`

4. To install the application dependencies, run:

    `docker compose exec app rm -rf vendor composer.lock && docker compose exec app composer install`

6. Generate your application encryption key. In the terminal, run:

    `docker compose exec app php artisan key:generate`
    
    
6. Access the application from your browser: `http://localhost:8000`
