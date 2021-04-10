<?php

namespace Lemaur\Sitemap\Tags;

use Spatie\Sitemap\Tags\Url as SpatieUrl;

class Url extends SpatieUrl
{
    /** @var \Lemaur\Sitemap\Tags\Image[] */
    public array $images = [];

    public function addImage(string | Image $image): static
    {
        if (is_string($image)) {
            $image = new Image($image);
        }

        $this->images[] = $image;

        return $this;
    }
}
