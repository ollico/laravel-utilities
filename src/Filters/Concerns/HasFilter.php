<?php

namespace Ollico\Utilities\Filters\Concerns;

use Illuminate\Database\Eloquent\Builder;
use Ollico\Utilities\Filters\Filters;

trait HasFilters
{
    public function scopeFilter(Builder $query, Filters $filters): void
    {
        $filters->apply($query);
    }
}
