# Generate sitemaps with images

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lemaur/laravel-image-sitemap.svg?style=flat-square)](https://packagist.org/packages/lemaur/laravel-image-sitemap)
[![Total Downloads](https://img.shields.io/packagist/dt/lemaur/laravel-image-sitemap.svg?style=flat-square)](https://packagist.org/packages/lemaur/laravel-image-sitemap)
[![License](https://img.shields.io/packagist/l/lemaur/laravel-image-sitemap.svg?style=flat-square&color=yellow)](https://github.com/leMaur/laravel-image-sitemap/blob/master/LICENSE.md)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/lemaur/laravel-image-sitemap/run-tests?label=tests&style=flat-square)](https://github.com/lemaur/laravel-image-sitemap/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/lemaur/laravel-image-sitemap/Check%20&%20fix%20styling?label=code%20style&style=flat-square)](https://github.com/lemaur/laravel-image-sitemap/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![GitHub Sponsors](https://img.shields.io/github/sponsors/lemaur?style=flat-square&color=ea4aaa)](https://github.com/sponsors/leMaur)
[![Trees](https://img.shields.io/badge/dynamic/json?color=yellowgreen&style=flat-square&label=Trees&query=%24.total&url=https%3A%2F%2Fpublic.offset.earth%2Fusers%2Flemaur%2Ftrees)](https://ecologi.com/lemaur?r=6012e849de97da001ddfd6c9)

This package can generate a sitemap with images according to [Google Specifications](https://developers.google.com/search/docs/advanced/sitemaps/image-sitemaps).

It's basically built on top of [Spatie's laravel-sitemap](https://github.com/spatie/laravel-sitemap).
The reason why I create it, it's because Spatie doesn't plan to add this functionality to his own package ([see here for more info](https://github.com/spatie/laravel-sitemap/pull/291#issuecomment-579476206)).

## Support Me

Hey folks,

Do you like this package? Do you find it useful and it fits well in your project?

I am glad to help you, and I would be so grateful if you considered supporting my work.

You can even choose 😃:
* You can [sponsor me 😎](https://github.com/sponsors/leMaur) with a monthly subscription.
* You can [buy me a coffee ☕ or a pizza 🍕](https://github.com/sponsors/leMaur?frequency=one-time&sponsor=leMaur) just for this package.
* You can [plant trees 🌴](https://ecologi.com/lemaur?r=6012e849de97da001ddfd6c9). By using this link we will both receive 30 trees for free and the planet (and me) will thank you. 
* You can "Star ⭐" this repository (it's free 😉).

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
