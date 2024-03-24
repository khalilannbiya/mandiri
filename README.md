# Mandiri Printing

Mandiri Printing is an online printing business created to introduce the business to everyone. This website uses WhatsApp for checkout, so when a customer wants to buy a product, they will be redirected to WhatsApp. Currently, the transaction process cannot be done on this website, but we hope to implement it in the future. The e-commerce website usually provides detailed product descriptions, photos, and pricing information. The purpose of this website is for freelance work. This application was created using Laravel v10 and requires a minimum of PHP v8.1. Therefore, if you encounter any errors or bugs during the installation or usage process, it is possible that they are caused by an unsupported PHP version.

## Tech Stack

-   **Client :** Tailwind, Blade Template
-   **Server :** PHP with Laravel

## Run Locally

Clone the project

```bash
  git clone https://github.com/khalilannbiya/mandiri.git
```

Or Download ZIP

[Link](https://github.com/khalilannbiya/mandiri/archive/refs/heads/main.zip)

Go to the project directory

```bash
  cd mandiri
```

Run the command

```bash
  composer update
```

Or

```bash
  composer install
```

Copy the .env file from .env.example.

```bash
  cp .env.example .env
```

Please don't forget to create the 'db_mandiri' database in phpMyAdmin.

Configure the .env file

```bash
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=db_mandiri
  DB_USERNAME=root
  DB_PASSWORD=
```

If you are using Apache as your web server, change "APP_URL" at .env to the following:

```bash
  APP_URL=http://mandiri.test
```

Generate key

```bash
  php artisan key:generate
```

Create symlink

```bash
  php artisan storage:link
```

Migrate database

```bash
  php artisan migrate
```

Run User Seeder

```bash
  php artisan db:seed --class=UserSeeder
```

Install node_modules

```bash
  npm i
```

Run npm run dev

```bash
  npm run dev
```

Run serve

```bash
  php artisan serve
```

## Documentation

-   [Tailwind](https://tailwindcss.com/docs/installation)
-   [Blade Template](https://laravel.com/docs/9.x/blade)
-   [Laravel](https://laravel.com/docs/9.x)

## Features

-   Product Management
-   Login Admin
-   Register Admin
-   Checkout Via WhatsApp

## Feedback

If you have any feedback, please reach out to us at syeichkhalil@gmail.com
