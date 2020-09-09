<?php

declare(strict_types=1);

namespace Ollico\Utilities\Enums;

use DavidIanBonner\Enumerated\Enum;

class Employment extends Enum
{
    public const FULL_TIME = 'full_time';
    public const PART_TIME = 'part_time';
    public const STUDENT = 'student';
    public const RETIRED = 'retired';
    public const UNEMPLOYED = 'unemployed';

    public function langKey(): string
    {
        return 'employment';
    }

    public function langKeyPrefix(): string
    {
        return 'optiiva-utils::';
    }
}
