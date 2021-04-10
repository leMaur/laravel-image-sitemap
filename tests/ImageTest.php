<?php

namespace Lemaur\Sitemap\Tests;

use Lemaur\Sitemap\Tags\Image;

class ImageTest extends TestCase
{
    protected Image $image;

    public function setUp(): void
    {
        parent::setUp();

        $this->image = new Image(
            'defaultUrl',
            'defaultCaption',
            'defaultGeoLocation',
            'defaultTitle',
            'defaultLicense'
        );
    }

    /** @test */
    public function it_provides_a_create_method(): void
    {
        $image = Image::create(
            url: 'testUrl',
            caption: 'testCaption',
            geoLocation: 'testGeoLocation',
            title: 'testTitle',
            license: 'testLicense'
        );

        self::assertEquals('testUrl', $image->url);
        self::assertEquals('testCaption', $image->caption);
        self::assertEquals('testGeoLocation', $image->geoLocation);
        self::assertEquals('testTitle', $image->title);
        self::assertEquals('testLicense', $image->license);
    }

    /** @test */
    public function url_can_be_set(): void
    {
        $this->image->setUrl('testImageUrl');

        self::assertEquals('testImageUrl', $this->image->url);
    }

    /** @test */
    public function caption_can_be_set(): void
    {
        $this->image->setCaption('testCaption');

        self::assertEquals('testCaption', $this->image->caption);
    }

    /** @test */
    public function geo_location_can_be_set(): void
    {
        $this->image->setGeoLocation('testGeoLocation');

        self::assertEquals('testGeoLocation', $this->image->geoLocation);
    }

    /** @test */
    public function title_can_be_set(): void
    {
        $this->image->setTitle('testTitle');

        self::assertEquals('testTitle', $this->image->title);
    }

    /** @test */
    public function license_can_be_set(): void
    {
        $this->image->setLicense('testLicense');

        self::assertEquals('testLicense', $this->image->license);
    }
}
