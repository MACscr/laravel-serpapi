# Laravel Package for tracking Google laravel-serpapi

Broken at the moment. Fork attempt to remove nova and other uneeded dependencies. I have no idea what I am doing, so bear with me.

## Installation

You can install the package via composer:

```bash
composer require macscr/laravel-serpapi
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Macscr\LaravelSerpapi\LaravelSerpapiServiceProvider" --tag="laravel-serpapi-config"
```

This is the contents of the published config file:

```php
return [
    'api_key' => env('SERPAPI_API_KEY'),
    'search_engine' => env('SERPAPI_ENGINE', 'google')
];
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Tipoff](https://github.com/tipoff)
- [Macscr](https://github.com/tipoff)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
