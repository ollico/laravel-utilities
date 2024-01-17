<?php

namespace Ollico\Utilities\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

abstract class Filters
{
    /** @var \Illuminate\Http\Request */
    protected $request;

    /** @var array */
    protected $filters = [];

    /** @var array */
    protected $globalFilters = [];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function apply(Builder $builder): Builder
    {
        foreach ($this->globalFilters as $filter) {
            if (method_exists($this, $filter)) {
                $this->$filter($builder, Arr::get($this->getFilters(), $filter));
            }
        }

        foreach ($this->getFilters() as $filter => $value) {
            if (method_exists($this, $filter)) {
                $this->$filter($builder, $value);

                continue;
            }

            $filter = Str::camel($filter);
            if (method_exists($this, $filter)) {
                $this->$filter($builder, $value);
            }
        }

        return $builder;
    }

    public function getFilters(): array
    {
        return array_filter($this->request->only($this->filters));
    }
}
