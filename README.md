# ui42 - Obce

## HTML
This is HTML templates with CSS(LESS)

## LARAVEL
This is Laravel app.

1. Install dependencies
    ```sh
    cd laravel/obce/
    composer install
    ```

2. Create file **.env** and generate appliaction key
    ```sh
    cp .env.example .env
    php artisan key:generate
    ```

3. Please create database, e.g. **db_cities** and config access in **.env**

4. Create table Cities with command
    ```sh
    php artisan migrate
    ```
5. Import data of Cities from portal e-obce.sk
    ```sh
    php artisan data:import
    ```
6. Run app
    ```sh
    php artisan serve
    ```

    Open browser: [http://localhost:8000](http://localhost:8000)

For better compatibile with package **PHP Simple HTML DOM parser** please use PHP **max. ver. < 7.2**
