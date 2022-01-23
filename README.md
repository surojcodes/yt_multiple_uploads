<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## About Application

This application is part of my youtube video.

[Click here](https://youtu.be/y6_uLzg4NTc) to watch the video.

This repo shows you how to upload multiple files/images from a form in laravel 8.

**Instruction**

-   Create your database
-   Rename .env.example to .env and Modify the .env file to add your database name, username and password

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_db_name
    DB_USERNAME=your_db_user
    DB_PASSWORD=your_password
    ```

-   Migrate the table using

    ```
    php artisan migrate
    ```

-   Run the server

    ```
    php artisan serve
    ```

-   Visit 127.0.0.1:8000
