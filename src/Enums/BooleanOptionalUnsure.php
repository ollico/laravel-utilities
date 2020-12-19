<?php

declare(strict_types=1);

namespace Ollico\Utilities\Enums;

use DavidIanBonner\Enumerated\Enum;

class BooleanOptionalUnsure extends Enum
{
    public const YES = 'yes';
    public const NO = 'no';
    public const PREFER_NOT = 'prefer_not';
    public const DONT_KNOW = 'dont_know';

    public function langKey(): string
    {
        return 'boolean-optional-unsure';
    }

    public function langKeyPrefix(): string
    {
        return 'laravel-utils::';
    }
}
