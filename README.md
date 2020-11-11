# NewsApi.org Laravel Dashboard Tile

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rbibby/laravel-dashboard-news-tile.svg?style=flat-square)](https://packagist.org/packages/rbibby/laravel-dashboard-news-tile)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/rbibby/laravel-dashboard-news-tile/run-tests?label=tests)](https://github.com/rbibby/laravel-dashboard-news-tile/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/rbibby/laravel-dashboard-news-tile.svg?style=flat-square)](https://packagist.org/packages/rbibby/laravel-dashboard-news-tile)
[![Buy us a tree](https://img.shields.io/badge/Treeware-%F0%9F%8C%B3-lightgreen?style=for-the-badge)](https://plant.treeware.earth/rbibby/laravel-dashboard-news-tile)

Displays latest news on your Laravel Dashboard using newsapi.org

This tile can be used on [the Laravel Dashboard](https://docs.spatie.be/laravel-dashboard).

## Installation

You can install the package via composer:

```bash
composer require rbibby/laravel-dashboard-news-tile
```

## Configuration

In the `dashboard` config file, you must add this configuration in the `tiles` key. 

The `api-key` option should contain your API key from https://newsapi.org/. It is recommended this is set in an env variable.

The `country-code` option sets which country to list news from. For a list of valid country codes, see the [newsapi.org.uk documentation](https://newsapi.org/docs/endpoints/top-headlines)

The `number-of-articles` option determines how many articles to show on the dashboard.

The `refresh-interval-in-seconds` option determines how many seconds will pass before the dashboard tile is re-rendered.

```php
// config/dashboard.php

return [
    // ...
    'tiles' => [
        'news' => [
            'api-key' => env('NEWS_API_KEY'),
            'country-code' => 'gb',
            'number-of-articles' => 10,
            'refresh-interval-in-seconds' => 60,
        ],
    ],
];
```

In `app\Console\Kernel.php` you should schedule the `\RBibby\NewsTile\FetchDataFromApiCommand` to run. You can let it run every minute if you want. You could also run it less frequently if fast updates on the dashboard aren't that important for this tile.

```php
// app/Console/Kernel.php

protected function schedule(Schedule $schedule)
{
    // ...
    $schedule->command(\RBibby\NewsTile\FetchDataFromApiCommand::class)->everyMinute();
}
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

## Treeware

This package is [**Treeware**](https://treeware.earth). If you use it in production, then we ask that you [**buy the world a tree**](https://plant.treeware.earth/rbibby/laravel-dashboard-news-tile) to thank us for our work. By contributing to the Treeware forest you’ll be creating employment for local families and restoring wildlife habitats.