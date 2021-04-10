<?php

namespace Lemaur\Sitemap\Tags;

class Image
{
    public string $url;

    public string $caption;

    public string $geoLocation;

    public string $title;

    public string $license;

    public static function create(string $url, string $caption = '', string $geoLocation = '', string $title = '', string $license = ''): static
    {
        return new static($url, $caption, $geoLocation, $title, $license);
    }

    public function __construct(string $url, string $caption = '', string $geoLocation = '', string $title = '', string $license = '')
    {
        $this->setUrl($url);

        $this->setCaption($caption);

        $this->setGeoLocation($geoLocation);

        $this->setTitle($title);

        $this->setLicense($license);
    }

    public function setUrl(string $url = ''): static
    {
        $this->url = $url;

        return $this;
    }

    public function setCaption(string $caption = ''): static
    {
        $this->caption = $caption;

        return $this;
    }

    public function setGeoLocation(string $geoLocation = ''): static
    {
        $this->geoLocation = $geoLocation;

        return $this;
    }

    public function setTitle(string $title = ''): static
    {
        $this->title = $title;

        return $this;
    }

    public function setLicense(string $license = ''): static
    {
        $this->license = $license;

        return $this;
    }
}
