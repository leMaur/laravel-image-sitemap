<?php

namespace Lemaur\Sitemap;

use Spatie\Sitemap\Sitemap as SpatieSitemap;

class Sitemap extends SpatieSitemap
{
    public function render(): string
    {
        $tags = collect($this->tags)->unique('url')->filter();

        $hasImages = false;

        foreach ($tags as $tag) {
            if ((bool) count(data_get($tag, 'images', []))) {
                $hasImages = true;
            }
        }

        return view('image-sitemap::sitemap')
            ->with(['tags' => $tags, 'hasImages' => $hasImages])
            ->render();
    }
}
