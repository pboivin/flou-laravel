# flou-laravel

<p>
<a href="https://github.com/pboivin/flou-laravel/actions"><img src="https://github.com/pboivin/flou-laravel/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/pboivin/flou-laravel"><img src="https://img.shields.io/packagist/v/pboivin/flou-laravel" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/pboivin/flou-laravel"><img src="https://img.shields.io/packagist/l/pboivin/flou-laravel" alt="License"></a>
</p>

This package provides [Laravel](https://github.com/laravel/laravel) integration for [Flou](https://github.com/pboivin/flou) — a PHP project optimized to quickly implement image lazy loading on prototypes and static sites, using a local folder of source images.

**Requirements:**

- PHP >= 8.0
- Laravel >= 6.0


## Installing 

The package can be installed via Composer:

```
composer require pboivin/flou-laravel
```

## Getting Started

First, publish the configuration file:

```
php artisan vendor:publish --tag=flou-config
```

Edit `config/flou.php` to match your project's configuration.

From there, you can use all features through the `Flou` facade. For example:

```php
{!! Flou::imageSet([
        'image' => 'my-image.jpg',
        'widths' => [400, 800, 1200, 1600],
        'formats' => ['webp', 'jpg'],
    ])
    ->render()
    ->picture(['class' => 'my-image', 'alt' => 'Lorem ipsum']);
!!}
```

## Documentation

You'll find all available features and examples in the [Flou documentation](https://github.com/pboivin/flou/blob/main/README.md).


## License

Flou is open-sourced software licensed under the [MIT license](LICENSE.md).
