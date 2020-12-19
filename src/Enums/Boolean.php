<?php

declare(strict_types=1);

namespace Ollico\Utilities\Enums;

use DavidIanBonner\Enumerated\Enum;

class Boolean extends Enum
{
    public const YES = 'yes';
    public const NO = 'no';

    public function langKey(): string
    {
        return 'boolean';
    }

    public function langKeyPrefix(): string
    {
        return 'laravel-utils::';
    }
}
