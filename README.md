# LaraAdminify

![LaraAdminify Banner](public/images/LaraAdminfy_banner.png)

LaraAdminify - simplify admin panel creation with dynamic features for plugins and themes. Effortlessly craft customizable dashboards for efficient development.

With LaraAdminify, you can create and manage plugins, themes, dashboards, menus, widgets, pages, and settings with ease.

We believe that the best way to create an admin panel is to make it dynamic. This is why we created LaraAdminify. It is a package that simplifies the creation of admin panels by providing dynamic features for plugins and themes. With LaraAdminify, you can create and manage plugins, themes, dashboards, menus, widgets, pages, and settings with ease.


Website: [https://laraadminify.com](https://laraadminify.com)


## Features

- **Dynamic Plugins**: Create and manage plugins with ease.

- **Dynamic Themes**: Create and manage themes with ease.

- **Dynamic Dashboards**: Create and manage dashboards with

- **Dynamic Menus**: Create and manage menus with ease.

- **Dynamic Widgets**: Create and manage widgets with ease.

- **Dynamic Pages**: Create and manage pages with ease.

- **Dynamic Settings**: Create and manage settings with ease.




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

