<?php

namespace Lemaur\Sitemap\Tests;

use Carbon\Carbon;
use Lemaur\Sitemap\SitemapServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use Spatie\Snapshots\MatchesSnapshots;

class TestCase extends Orchestra
{
    use MatchesSnapshots;

    protected Carbon $now;

    public function setUp(): void
    {
        parent::setUp();

        $this->now = Carbon::create('2016', '1', '1', '0', '0', '0');

        Carbon::setTestNow($this->now);
    }

    protected function getPackageProviders($app): array
    {
        return [
            SitemapServiceProvider::class,
            \Spatie\Sitemap\SitemapServiceProvider::class,
        ];
    }
}
