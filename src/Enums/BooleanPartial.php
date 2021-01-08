<?php

declare(strict_types=1);

namespace Ollico\Utilities\Enums;

use DavidIanBonner\Enumerated\Enum;

class BooleanPartial extends Enum
{
    public const YES = 'yes';
    public const NO = 'no';
    public const PARTIAL = 'partial';

    public function langKey(): string
    {
        return 'boolean-partial';
    }

    public function langKeyPrefix(): string
    {
        return 'laravel-utils::';
    }
}
