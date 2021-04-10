<?php

namespace Lemaur\Sitemap;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lemaur\Sitemap\Sitemap
 */
class SitemapFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel_image_sitemap';
    }
}
