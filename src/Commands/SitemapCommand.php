<?php

namespace Lemaur\Sitemap\Commands;

use Illuminate\Console\Command;

class SitemapCommand extends Command
{
    public $signature = 'laravel_image_sitemap';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
