<?php

declare(strict_types=1);

namespace Ollico\Utilities\Concerns;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

trait HasGuid
{
    protected static function bootHasUuid(): void
    {
        static::creating(static function ($model) {
            $model->guid = $model->guid ?: Str::uuid()->toString();
        });
    }

    public function scopeGuid(Builder $query, string $guid): void
    {
        $query->where('guid', $guid);
    }
}
