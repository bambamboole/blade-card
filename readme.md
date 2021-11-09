# Laravel Nova - Blade Card

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bambamboole/blade-card.svg?style=flat-square)](https://packagist.org/packages/bambamboole/blade-card)
[![Total Downloads](https://img.shields.io/packagist/dt/bambamboole/blade-card.svg?style=flat-square)](https://packagist.org/packages/bambamboole/blade-card)

Very simple Laravel Nova package to display Blade views as cards


## Installation

You can install the package via composer:

```bash
composer require bambamboole/blade-card
```

## Usage

```php
public function cards(Request $request): array
{
    return [
        (new BladeCard())
        ->view('foo.bar')
        ->with(['my' => 'data'])
    ];
}
```

## Credits

- [Manuel Christlieb](https://github.com/bambamboole)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
