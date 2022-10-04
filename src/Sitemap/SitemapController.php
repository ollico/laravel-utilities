<?php

declare(strict_types=1);

namespace Ollico\Utilities\Sitemap;

class SitemapController
{
    public function __invoke(SeoSitemap $sitemap)
    {
        return response($sitemap->toXml(), 200, ['Content-Type' => 'application/xml']);
    }
}
