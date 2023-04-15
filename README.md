# Laravel Stripe Checkout

This is a demo of Laravel-based web application that makes use of Stripe's payment processing system. The application supports both single product checkout and subscription checkout. Project was done mainly for learning purposes.

## Features

- Single product checkout: Users can purchase a single product by providing their payment information and completing the checkout process.
- Subscription checkout: Users can subscribe to a product by providing their payment information and selecting a subscription plan.

## Requirements

- PHP 8.1 or later
- Composer
- Laravel 9.x
- Relational database
- Stripe account and API keys

## To be able to test subscriptions checkout on local machine you need stripe cli
## if not installed subscriptions are not saved on database if using local machine
- Stripe CLI, official docs for installation (https://stripe.com/docs/stripe-cli)


## Installation of requirement using docker

Docker compose and dockerfile include:
- nginx:1.19-alpine
- php 8.1.2-fpm (container also will include composer and stripe cli)
- mysql:8.0

1. docker-compose -f docker-compose-dev.yml up

## Proyect Installation

1. Run `composer install` to install the application dependencies.
2. Configure your environment variables in the `.env` file, including your Stripe API keys and other settings.
3. Run `php artisan migrate` to create the database tables.
4. Run `php artisan db:seed PlansSeeder` to seed database with subscription plans used by application.
5. Run `php artisan db:seed DatabaseSeeder` to seed database with random products

if using docker you may need to set permissions for laravel logs and framework folders

- `chown -R www-data:www-data storage/logs`
- `chown -R www-data:www-data storage/framework`

## Stripe CLI configuration

After stripe cli has been installed manually or by using docker

Login and authenticate your Stripe user Account to generate a set of restricted keys.
1. `stripe login`

2. After you get response press the Enter key on your keyboard to complete the authentication process in your browser or copy link and paste it on your browser.


Optionally, if you don’t want to use a browser, use the --interactive flag to authenticate with an existing API secret key or restricted key. This can be helpful when authenticating to the CLI without a browser, such as in a CI/CD pipeline.

`stripe login --interactive`

Optionally, use the --api-key flag to specify your API secret key inline each time you send a request.

`stripe login --api-key sk_test_51MuljDGMeX7S2HRxjmDzKDhZMQ3FVE9wPp8SE8fAWj`

## TO START LISTEN TO STRIPE WEBHOOK PORT - THIS IS IMPORTANT FOR OUR LOCAL DATABASE TO GET UPDATED WHENEVER A SUBSCRIPTION STATE IS CHANGED ON STRIPE API

- if using stripe cli from inside a docker container
`stripe listen --forward-to my-server-container-name:80/stripe/webhook`

- outside docker
`stripe listen --forward-to localhost:8080/stripe/webhook`

