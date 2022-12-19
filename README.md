<h1> Steps to setup the project locally </h1>



## Clone GitHub repo for this project locally

```https://github.com/DevAmby/Kanye_random_quotes.git```


## cd into the project

```cd Kanye_random_quotes```


## Install or Update Composer Dependencies

```composer install```


### Install NPM Dependencies

```npm install```

## Create a copy of your .env file

```cp .env.example .env```


## Generate an app encryption key

```php artisan key:generate```

## Create an empty database for our application

create a database name on phpmyadmin and copy

## In the .env file, add database information to allow Laravel to connect to the database

In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD options to match the credentials of the database you just created.

## Migrate the database

```php artisan migrate```

## Serve the project

```php artisan serve```