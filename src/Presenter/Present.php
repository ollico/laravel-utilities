<?php

declare(strict_types=1);

namespace Ollico\Utilities\Presenter;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class Present implements Arrayable
{
    protected $presentable;

    public function __construct($presentable)
    {
        $this->presentable = $presentable;
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
        return $collection->map(function (Presentable $item) {
            $item->present();
        });
    }

    protected function isPresentable($presentable): bool
    {
        return $presentable instanceof Presentable;
    }

    public function toArray()
    {
        $transformed = $this->transform();

        if ($transformed instanceof Collection) {
            return $transformed->toArray();
        }

        return $transformed;
    }

    public static function make($presentable)
    {
        return (new self($presentable))->transform();
    }
}
