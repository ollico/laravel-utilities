<?php

declare(strict_types=1);

namespace Ollico\Utilities\Enums;

use DavidIanBonner\Enumerated\Enum;

class BooleanLoose extends Enum
{
    public const YES = 'yes';
    public const NO = 'no';
    public const UNSURE = 'unsure';

    public function langKey(): string
    {
        return 'boolean-loose';
    }

    public function langKeyPrefix(): string
    {
        return 'laravel-utils::';
    }
}
