<?php

declare(strict_types=1);

namespace Ollico\Utilities\Controllers;

use Ollico\Utilities\Sitemap\SeoSitemap;

class SitemapController
{
    public function __invoke()
    {
        $sitemap = new SeoSitemap();

        $sitemap->attachCustom('/', now()->subWeeks(2)->format('Y-m-d\TH:i:s'));

        return response($sitemap->toXml(), 200, ['Content-Type' => 'application/xml']);
    }
}
