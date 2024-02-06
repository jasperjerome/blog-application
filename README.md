# Blog Application

This is a simple blog application developed using Laravel.

## Prerequisites

Before you begin, ensure you have met the following requirements:
- PHP installed on your machine (preferably PHP 7.x or higher)
- Laragon installed on your machine and configured
- Composer installed on your machine
- MySQL or another relational database management system installed and configured

## Installation

1. Clone the repository to your local machine:
   ```sh
   git clone https://github.com/jasperjerome/blog-application.git

## navigate to the blog-application

```sh
cd blog-application

## run the following command

```sh
composer install
Create a copy of the .env.example file and rename it to .env. Update the database configuration in the .env file
generate an application key using
```sh
php artisan key:generate
migrate te database using
```sh
php artisan migrate

## start the developement server
```sh
php artisan serve
```sh
npm run dev
