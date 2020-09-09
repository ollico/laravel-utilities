<?php

declare(strict_types=1);

namespace Ollico\Utilities\Enums;

use DavidIanBonner\Enumerated\Enum;

class Ethnicity extends Enum
{
    public const WHITE = 'white';
    public const BLACK_OR_BRITISH_BLACK = 'black_british_black';
    public const ASIAN_OR_BRITISH_ASIAN = 'asian_british_asian';
    public const CHINESE = 'chinese';
    public const MIXED = 'mixed';
    public const OTHER = 'other';
    public const DECLINED = 'declined';

    public function langKey(): string
    {
        return 'ethnicity';
    }

    public function langKeyPrefix(): string
    {
        return 'optiiva-utils::';
    }
}
