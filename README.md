# LaraAdminify

![LaraAdminify Banner](public/images/LaraAdminfy_banner.png)

LaraAdminify is a Laravel package that allows you to generate an admin panel for your Laravel application. 

## Installation

You can install the package via composer:

```bash
composer require laraadminify/laraadminify
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="LaraAdminify\LaraAdminifyServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
    'name' => 'LaraAdminify'
];
```

## Usage

```php
// In your routes file
Route::laraadminify();
```

## Testing

```bash
composer test
```

## Credits

- [LaraAdminify](Alvin Kiveu)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
```

