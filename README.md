<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).


Laravel is accessible, powerful, and provides tools required for large, robust applications.



## Some screenshots

You can find some screenshots of the application on : https://www./
## Installation

To create  development environment follow these instructions.

Setting up your development environment on your local machine:

- $ git clone https://github.com/Laytoo/lastBlog.git
- $ cd lastBlog.
- $ cp .env.example .env.
- $ cmposer update.
- $ php artisan key:generate.
- $ php artisan storage:link.

## Before starting

You need to run the migrations with the seeds :

$ php artisan migrate --seed

This will create new users that you can use to sign in :

email: admin@gmail.com  to join as admin
password: password

email: user@gmail.com  to join as user
password: password

## To Push Email Notification To The User

- Setting up your .env environment on your local machine into your smtp mailtrap settings


## Have a nice day
