<?php

namespace Lemaur\Sitemap;

use Lemaur\Sitemap\Commands\SitemapCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SitemapServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel_image_sitemap')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_image_sitemap_table')
            ->hasCommand(SitemapCommand::class);
    }
}
