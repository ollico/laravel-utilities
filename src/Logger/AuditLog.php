<?php

declare(strict_types=1);

namespace Ollico\Utilities\Logger;

use DavidIanBonner\Enumerated\Enum;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\ActivityLogger;

class AuditLog
{
    protected ActivityLogger $activity;

    public function __construct()
    {
        $this->activity = activity();
    }

    public function causer(?Model $causer = null): AuditLog
    {
        if (! $causer) {
            $this->activity->causedByAnonymous();
        } else {
            $this->activity->causedBy($causer);
        }

        return $this;
    }

    public function dimension(Model $model): AuditLog
    {
        $this->activity->performedOn($model);

        return $this;
    }

    public function properties(array $props = []): AuditLog
    {
        $this->activity->withProperties($props);

        return $this;
    }

    public function log(Enum $activity): void
    {
        $this->activity->log($activity->value());
    }
}
