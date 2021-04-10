# Generate sitemaps with images

[![Latest Stable Version](https://poser.pugx.org/lemaur/eloquent-publishing/v)](//packagist.org/packages/lemaur/eloquent-publishing)
[![Total Downloads](https://poser.pugx.org/lemaur/eloquent-publishing/downloads)](//packagist.org/packages/lemaur/eloquent-publishing)
[![License](https://poser.pugx.org/lemaur/eloquent-publishing/license)](//packagist.org/packages/lemaur/eloquent-publishing)
[![Tests](https://github.com/leMaur/laravel-image-sitemap/actions/workflows/run-tests.yml/badge.svg)](https://github.com/leMaur/laravel-image-sitemap/actions/workflows/run-tests.yml)
[![Code Style](https://github.com/leMaur/laravel-image-sitemap/actions/workflows/php-cs-fixer.yml/badge.svg)](https://github.com/leMaur/laravel-image-sitemap/actions/workflows/php-cs-fixer.yml)
[![Treeware](https://img.shields.io/badge/dynamic/json?color=brightgreen&label=Treeware&query=%24.total&url=https%3A%2F%2Fpublic.offset.earth%2Fusers%2Ftreeware%2Ftrees)](https://treeware.earth)

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

## Treeware

If you use it in production, then I ask that you [**buy the world a tree**](https://plant.treeware.earth/leMaur/laravel-image-sitemap) to thank me for my work. By contributing to the Treeware forest you’ll be creating employment for local families and restoring wildlife habitats.

Read more about [Treeware](https://treeware.earth).
