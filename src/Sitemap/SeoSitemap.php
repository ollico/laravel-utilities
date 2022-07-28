<?php

declare(strict_types=1);

namespace Ollico\Utilities\Sitemap;

use Gwd\SeoMeta\Helper\SeoSitemap as SitemapHelper;

class SeoSitemap extends SitemapHelper
{
    public function toXml()
    {
        return view('utils::sitemap', ['items' => $this->toArray()])->render();
    }
}
