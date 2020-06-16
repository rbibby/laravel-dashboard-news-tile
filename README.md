# NewsApi.org Laravel Dashboard Tile

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rbibby/laravel-dashboard-news-tile.svg?style=flat-square)](https://packagist.org/packages/rbibby/laravel-dashboard-news-tile)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/rbibby/laravel-dashboard-news-tile/run-tests?label=tests)](https://github.com/rbibby/laravel-dashboard-news-tile/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/rbibby/laravel-dashboard-news-tile.svg?style=flat-square)](https://packagist.org/packages/rbibby/laravel-dashboard-news-tile)

Displays latest news on your Laravel Dashboard using newsapi.org

This tile can be used on [the Laravel Dashboard](https://docs.spatie.be/laravel-dashboard).

## Installation

You can install the package via composer:

```bash
composer require rbibby/laravel-dashboard-news-tile
```

## Usage

In your dashboard view you use the `livewire:news-tile` component.

```html
<x-dashboard>
    <livewire:news-tile position="e7:e16" />
</x-dashboard>
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email hello@rbibby.co.uk instead of using the issue tracker.

## Credits

- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
