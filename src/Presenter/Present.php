<?php

declare(strict_types=1);

namespace Ollico\Utilities\Presenter;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class Present
{
    protected $presentable;
    protected $transformToArray;

    public function __construct($presentable, $transformToArray)
    {
        $this->presentable = $presentable;
        $this->transformToArray = $transformToArray;
    }

    public function transform()
    {
        if ($this->isPresentable($this->presentable)) {
            return $this->presentable->present();
        }

        if (is_array($this->presentable)) {
            return $this->mapCollection(collect($this->presentable))->all();
        }

        if ($this->presentable instanceof Collection) {
            return $this->mapCollection($this->presentable);
        }

        if ($this->presentable instanceof LengthAwarePaginator) {
            return $this->presentable->setCollection(
                $this->mapCollection($this->presentable->getCollection())
            );
        }

        return $this->presentable;
    }

    protected function mapCollection(Collection $collection): Collection
    {
        return $collection->map(function ($item) {
            if ($this->transformToArray) {
                return $item->present()->toArray();
            }

            return $item->present();
        });
    }

    protected function isPresentable($presentable): bool
    {
        return $presentable instanceof Presentable;
    }

    public static function make($presentable, $transformToArray = false)
    {
        return (new self($presentable, $transformToArray))->transform();
    }
}
