<?php

namespace Lemaur\Sitemap;

use Lemaur\Sitemap\Commands\SitemapCommand;
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
