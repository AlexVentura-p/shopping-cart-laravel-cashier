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

## Images
<p>
    <img src="https://user-images.githubusercontent.com/78453595/236079762-cb38643a-d4e0-4179-981e-75ea4507d1b4.jpg" width="300">
    <img src="https://user-images.githubusercontent.com/78453595/236079726-96d0f1d4-0907-4278-a407-751ca155da17.jpg" width="300">
    <img src="https://user-images.githubusercontent.com/78453595/236079746-7116fff4-bd7d-4f6f-aced-963db08118d5.jpg" width="300">
    <img src="https://user-images.githubusercontent.com/78453595/236079797-a767dd50-2352-4081-b021-463fbba14feb.jpg" width="300">
    <img src="https://user-images.githubusercontent.com/78453595/236079801-29b2eff0-3469-40b7-8d58-b93a0756c279.jpg" width="300">
    <img src="https://user-images.githubusercontent.com/78453595/236079803-2ad10eeb-a3da-4b3c-8b1a-c39cf98d3edd.jpg" width="300">
    <img src="https://user-images.githubusercontent.com/78453595/236079804-a79ba1d2-a1b8-4fea-b762-73e2528ed28c.jpg" width="300">
    <img src="https://user-images.githubusercontent.com/78453595/236079805-df3304e1-ac7c-4e47-b8a4-2df556ce3169.jpg" width="300">
    <img src="https://user-images.githubusercontent.com/78453595/236079806-2ffcf25c-0e8a-462b-83d4-8cdbb2039ce7.jpg" width="300">
    <img src="https://user-images.githubusercontent.com/78453595/236079807-0a764c92-268d-477f-94da-eb9b25973e70.jpg" width="300">
    <img src="https://user-images.githubusercontent.com/78453595/236079808-7ee3f750-1647-4595-bf99-edeb29dd7f9d.jpg" width="300">
    <img src="https://user-images.githubusercontent.com/78453595/236079809-8861db56-266c-49d6-9b15-1e2bbe652aa3.jpg" width="300">
    <img src="https://user-images.githubusercontent.com/78453595/236079810-acc175ba-2eb7-4aeb-ae87-8a020a0cefb3.jpg" width="300">
</p>
