## About Hospitals

Hospitals is a simple application for demo purposes.

## Get started

Before start make sure you have installed Composer (https://getcomposer.org) and Docker (https://www.docker.com).

Then, install dependencies for the project:

```bash
composer install
```

Then, create a .env file:

```bash
cp .env.example .env
```

After that, setup docker environment:

```bash
./vendor/bin/sail up -d
```

Next run the migrations and seeder to create and populate tables in database:

```bash
./vendor/bin/sail php artisan migrate
#and
./vendor/bin/sail php artisan db:seed
```

## What is next?

At this point you should have the Hospitals back-end application with single endpoint (http://localhost/api/hospitals)
To test with local front-end make sure front-end application .env file has correct link for back-end.

Application also deployed and can be visited here (https://hospitals.fun/api/hospitals)
and (https://hospitals-front.vercel.app).

If you have any questions. Please contact the developer.
