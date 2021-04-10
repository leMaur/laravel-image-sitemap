<?php

namespace Lemaur\Sitemap;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SitemapServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-image-sitemap')
            ->hasConfigFile()
            ->hasViews();
    }
}
