# ui42 - Obce

## HTML
This is HTML templates with CSS(LESS)

## LARAVEL
This is Laravel app.

1. Please create database, e.g. db_cities
2. Create table Cities with command
    ```sh
    php artisan migrate
    ```
3. Import data of Cities from portal e-obce.sk
    ```sh
    php artisan data:migrate
    ```
4. Run app
    ```sh
    php artisan serve
    ```