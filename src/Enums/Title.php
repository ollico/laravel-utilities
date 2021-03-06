<?php

declare(strict_types=1);

namespace Ollico\Utilities\Enums;

use DavidIanBonner\Enumerated\Enum;

class Title extends Enum
{
    public const MR = 'mr';
    public const MRS = 'mrs';
    public const MS = 'ms';
    public const MISS = 'miss';
    public const DR = 'dr';
    public const PROF = 'prof';

    public function langKey(): string
    {
        return 'title';
    }

    public function langKeyPrefix(): string
    {
        return 'laravel-utils::';
    }
}
