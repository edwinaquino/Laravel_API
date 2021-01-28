
## About This Project

This is a very simple yet powerful Laravel Project to demonstrate the power of Lavarel to generate API with JSON output. This project contains all the required files to run the Laravel Project in your development environment or in a docker environment with Laravel's Sail feature. Laravel offers the following features:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Getting Started

To help you get started, this are the components for my local environment:

- Host OS: Windows 10 with Virtual Box 6.1
- Guest OS: Linux Ubuntu 20.04 TLS

The guest OS contained the following resources:

- Visual Studio Code
- PHP 7.4
- Composer 1.10.1
- Apache 2 Web Server version: Apache/2.4.41 (Ubuntu)
- Curl
- Laravel 8
- GIT

For the docker environment specifications, please see the docker-compose.yml file


## Download or Clone Repository

Download or clone this repository to your local PHP environment. From the Ubuntu envirnment, change directory to your home directory with the following command:

```$ cd ~```

Clone this repository

```git clone https://github.com/edwinaquino/Laravel_API.git```

Start the project in a docker container with Laravel Sail

```./vendor/bin/sail up -d```

Once all the dependencies have been downloaded and installed in the Docker container the server will start, you can access your server by going to the following URL in your browser:

http://localhost

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
