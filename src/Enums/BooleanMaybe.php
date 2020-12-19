<?php

declare(strict_types=1);

namespace Ollico\Utilities\Enums;

use DavidIanBonner\Enumerated\Enum;

class BooleanMaybe extends Enum
{
    public const YES = 'yes';
    public const NO = 'no';
    public const MAYBE = 'maybe';

    public function langKey(): string
    {
        return 'boolean-maybe';
    }

    public function langKeyPrefix(): string
    {
        return 'laravel-utils::';
    }
}
