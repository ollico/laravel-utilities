<?php

declare(strict_types=1);

namespace Ollico\Utilities\Presenter;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Pagination\CursorPaginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class Present implements Arrayable
{
    protected $presentable;
    protected $presenter;

    public function __construct($presentable, ?string $presenter = null)
    {
        $this->presentable = $presentable;
        $this->presenter = $presenter;
    }

    public function transform()
    {
        if ($this->isPresentable($this->presentable)) {
            return $this->presentable->present($this->presenter);
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

        if ($this->presentable instanceof CursorPaginator) {
            return $this->presentable->setCollection(
                $this->mapCollection($this->presentable->getCollection())
            );
        }

        return $this->presentable;
    }

    protected function mapCollection(Collection $collection): Collection
    {
        return $collection->map(function (Presentable $item) {
            return $item->present($this->presenter);
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

    public static function make($presentable, ?string $presenter = null)
    {
        return (new self($presentable, $presenter))->transform();
    }
}
