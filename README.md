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
   
   git clone https://github.com/jasperjerome/blog-application.git

## navigate to the blog-application

cd blog-application

## run the following command

composer install
Create a copy of the .env.example file and rename it to .env. Update the database configuration in the .env file
generate an application key using

php artisan key:generate
migrate te database using

php artisan migrate

## start the developement server

php artisan serve

npm run dev
