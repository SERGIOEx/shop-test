<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Init this project

- Clone and cd into this project
- ```composer install```
- ```composer update```
- ```php artisan migrate```
- ```php artisan module:seed Catalog```

## Project Business logic
- ```Modules```
- ```App\Core```

## TODO
- ```Payment Module```
- ```Admin Notify Email Text```
- ```Shipping option```


## Task
- Install the latest Laravel version
- create a Brand model with a respective database migration: table (id, name)
- create a Product model with a respective database migration: table (id, brand_id, name, price)
- make a View where all products are listed with brand name and price in a table (bootstrap will work just fine, but completely up to you)
- create Seeder that will fill the database with sample products
- add Product-Purchase functionality:
-- add a "BUY" button to each product in the list (see point 4)
-- button should lead to a URL with a basic checkout functionality (/checkout)
-- create an Order model with a respective database migration: table (id, total_product_value, total_shipping_value, client_name, client_address)
-- create a Checkout form (name, address, shipping option [free standard, express 10 EUR), where user lands after clicking "BUY NOW" button
-- collect and validate payment information of the customer (simulate credit card processer)
-- successful requests should be Stored to the database and a notification Email should be sent to the admin, presenting basic information about the order
- push everything to the created GIT repository
