<?php

namespace Ollico\Utilities\Concerns;

use Illuminate\Database\Eloquent\Builder;
use Ollico\Utilities\Filters;

trait HasFilters
{
    public function scopeFilter(Builder $query, Filters $filters): void
    {
        $filters->apply($query);
    }
}
