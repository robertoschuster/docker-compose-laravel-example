# docker-compose-laravel-example
An example showing how to run a PHP Laravel application over docker containers.


1. Create your .env file (based on .env.example).


2. In the `.env` file, set the variables `DOCKER_USER_NAME` and `DOCKER_USER_ID`. In the terminal, run `id -un` and `id -u` to get the values.


3. Generate your application encryption key using php artisan key:generate. In the terminal, run:

    `docker compose exec app php artisan key:generate`
    
    
4. Access the application from your browser: `http://localhost:8000`
