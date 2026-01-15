<?php

declare(strict_types=1);

namespace Ollico\Utilities\Sitemap;

use Closure;

class SeoSitemap
{
    protected $items = [];

    protected static ?Closure $customCallback = null;

    public function __construct(array $models)
    {
        $this->attachModelItems($models);
    }

    protected function attachModelItems(array $models = [])
    {
        foreach ($models as $model) {
            $items = $model::getSitemapItems();

            if ($items && $items->count() > 0) {
                $this->items = array_merge($this->items, $items->map(function($item){
                    return (object) [
                        'url'     => $item->getSitemapItemUrl(),
                        'lastmod' => $item->getSitemapItemLastModified(),
                    ];
                })->toArray());
            }
        }
    }

    public function attachCustom($path, $lastmod = null): SeoSitemap
    {
        $this->items[] = (object)[
            'url' => url($path),
            'lastmod' => $lastmod
        ];

        return $this;
    }

    public static function customPaths(Closure $callback): void
    {

    }

    protected function build(): void
    {
        if (static::$customCallback) {
            $this->items = array_merge($this->items, static::$customCallback($this));
        }
    }

    public function toArray(): array
    {
        $this->build();

        return $this->items;
    }

    public function toXml(): string
    {
        return view('utils:sitemap.xml', ['items' => $this->toArray()])->render();
    }
}
