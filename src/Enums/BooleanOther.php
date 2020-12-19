<?php

declare(strict_types=1);

namespace Ollico\Utilities\Enums;

use DavidIanBonner\Enumerated\Enum;

class BooleanOther extends Enum
{
    public const YES = 'yes';
    public const NO = 'no';
    public const OTHER = 'other';

    public function langKey(): string
    {
        return 'boolean-other';
    }

    public function langKeyPrefix(): string
    {
        return 'laravel-utils::';
    }
}
