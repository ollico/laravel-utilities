<?php

declare(strict_types=1);

namespace Ollico\Utilities;

use Illuminate\Contracts\Support\Arrayable;

class Breadcrumb implements Arrayable
{
    protected $items = [];

    public function admin($label = 'Admin', $route): Breadcrumb
    {
        $this->item($label, $route);

        return $this;
    }

    public function home($label = 'Dashboard', $route): Breadcrumb
    {
        $this->item($label, $route);

        return $this;
    }

    public function item($label, $url = null): Breadcrumb
    {
        $this->items[] = (object) [
            'label' => $label,
            'url' => $url,
            'isActive' => is_null($url),
        ];

        return $this;
    }

    public function toArray()
    {
        return $this->items;
    }

    public static function make(): Breadcrumb
    {
        return new self();
    }
}
