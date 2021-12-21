# Laravel Kafka example

- Clone this repository
- Run `composer install`
- Run `php artisan serve`

This project provides you a route to produce an example message: 

- Go to `localhost:8000/produce`

To start listening for messages, you can run the following command:

```bash
php artisan kafka:test-consume
```

It will log the message content to your default log channel.

You can open the `storage/logs/laravel.log` file to view the logged messages or run the following command in your terminal:

```bash
tail -f storage/logs/laravel.log
```
