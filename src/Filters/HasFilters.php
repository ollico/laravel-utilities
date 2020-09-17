<?php

namespace Ollico\Utilities\Filters;

use Illuminate\Database\Eloquent\Builder;

trait HasFilters
{
    public function scopeFilter(Builder $query, Filters $filters): void
    {
        $filters->apply($query);
    }
}
