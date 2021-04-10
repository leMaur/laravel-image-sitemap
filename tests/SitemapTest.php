<?php

namespace Lemaur\Sitemap\Tests;

use Lemaur\Sitemap\Sitemap;
use Lemaur\Sitemap\Tags\Image;
use Lemaur\Sitemap\Tags\Url;

class SitemapTest extends TestCase
{
    protected Sitemap $sitemap;

    public function setUp(): void
    {
        parent::setUp();

        $this->sitemap = new Sitemap();
    }

    /** @test */
    public function it_can_render_an_url_with_an_image(): void
    {
        $this->sitemap
            ->add(
                Url::create('/home')
                ->setLastModificationDate($this->now->subDay())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                ->setPriority(0.1)
                ->addImage('/url/to/image.jpg')
                ->addImage(
                    Image::create('/url/to/another-image.jpg')
                )
            );

        $this->assertMatchesXmlSnapshot($this->sitemap->render());
    }

    /** @test */
    public function it_can_render_an_url_with_an_image_and_all_its_properties(): void
    {
        $this->sitemap
            ->add(
                Url::create('/home')
                ->setLastModificationDate($this->now->subDay())
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_YEARLY)
                ->setPriority(0.1)
                ->addImage(
                    Image::create('/url/to/image.jpg')
                        ->setTitle('Image Title')
                        ->setCaption('Image Caption')
                        ->setGeoLocation('Image Geo Location')
                        ->setLicense('https://url/to/the/license')
                )
            );

        $this->assertMatchesXmlSnapshot($this->sitemap->render());
    }
}
