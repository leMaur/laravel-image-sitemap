# Generate sitemaps with images

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lemaur/laravel_image_sitemap.svg?style=flat-square)](https://packagist.org/packages/lemaur/laravel_image_sitemap)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/lemaur/laravel_image_sitemap/run-tests?label=tests)](https://github.com/lemaur/laravel_image_sitemap/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/lemaur/laravel_image_sitemap/Check%20&%20fix%20styling?label=code%20style)](https://github.com/lemaur/laravel_image_sitemap/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/lemaur/laravel_image_sitemap.svg?style=flat-square)](https://packagist.org/packages/lemaur/laravel_image_sitemap)

This package can generate a sitemap with images according to [Google Specifications](https://developers.google.com/search/docs/advanced/sitemaps/image-sitemaps).

It's basically built on top of [Spatie's laravel-sitemap](https://github.com/spatie/laravel-sitemap).
The reason why I create it, it's because Spatie doesn't plan to add this functionality to his own package ([see here for more info](https://github.com/spatie/laravel-sitemap/pull/291#issuecomment-579476206)).

## Installation

You can install the package via composer:

```bash
composer require lemaur/laravel-image-sitemap
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Lemaur\Sitemap\SitemapServiceProvider" --tag="laravel_image_sitemap-config"
```

## Usage

You can refer directly to [Spatie's laravel-sitemap documentation](https://github.com/spatie#usage) to which I've added the possibility to include images. 
See the example below. 

```php
use Carbon\Carbon;
use Lemaur\Sitemap\Sitemap;
use Lemaur\Sitemap\Tags\Image;
use Lemaur\Sitemap\Tags\Url;

Sitemap::create()

    ->add(Url::create('/home')
        ->setLastModificationDate(Carbon::yesterday())
        ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
        ->setPriority(0.1)
        ->addImage('/url/to/images.jpg')
        ->addImage(
            Image::create('/url/to/another-image.jpg')
                ->setTitle('Image Title')
                ->setCaption('Image Alt Text')
                ->setGeoLocation('Image Geo Location')
                ->setLicense('https://url/to/the/license')
        ))

   ->add(...)

   ->writeToFile($path);
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Maurizio](https://github.com/leMaur)
- [Spatie](https://github.com/spatie)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
