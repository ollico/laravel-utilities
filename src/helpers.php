<?php

use Illuminate\Database\Eloquent\Model;
use Ollico\Utilities\Loggers\LogAuditableEvent;

declare(strict_types=1);

if (! function_exists('audit_user')) {
    function audit_user(
        Model $dimension,
        string $activity,
        array $props = []
    ): void {
        audit($dimension, $activity, auth()->user(), $props);
    }
}

if (! function_exists('audit')) {
    function audit(
        Model $dimension,
        string $activity,
        ?Model $causer = null,
        array $props = []
    ): void {
        LogAuditableEvent::dispatch(...func_get_args());
    }
}
