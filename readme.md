# Otravel SOlution

A application to otravelsolution with inertiajs and laravel.

![](https://raw.githubusercontent.com/inertiajs/pingcrm/master/screenshot.png)

## Installation

Clone the repo locally:

```sh
git clone https://github.com/gmfaruk/otravelsolution.com.git
cd otravelsolution.com
```

Install PHP dependencies:

```sh
composer install
```

Install NPM dependencies:

```sh
npm ci
```

Build assets:

```sh
npm run dev
```

Setup configuration:

```sh
cp .env.example .env
```

Generate application key:

```sh
php artisan key:generate
```

Create an SQLite database. You can also use another database (MySQL, Postgres), simply update your configuration accordingly.

```sh
touch database/database.sqlite
```

Run database migrations:

```sh
php artisan migrate
```

Run database seeder:

```sh
php artisan db:seed
```

Run the dev server (the output will give the address):

```sh
php artisan serve
```

You're ready to go! Visit Otravel SOlution in your browser, and login with:

- **Username:** johndoe@example.com
- **Password:** secret

## Running tests

To run the Otravel SOlution tests, run:

```
phpunit
```
