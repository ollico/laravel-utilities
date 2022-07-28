<?php

namespace Ollico\Utilities\Tests;

use Gwd\SeoMeta\FieldServiceProvider;
use Ollico\Utilities\ServiceProviders\LaravelUtilitiesServiceProvider;
use Orchestra\Testbench\TestCase;

class SitemapTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            LaravelUtilitiesServiceProvider::class,
            FieldServiceProvider::class,
        ];
    }

    /** @test */
    function it_can_access_sitemap()
    {
        $this->get('/sitemap')
            ->assertSuccessful();
    }
}
