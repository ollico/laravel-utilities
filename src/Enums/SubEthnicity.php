<?php

declare(strict_types=1);

namespace Ollico\Utilities\Enums;

use DavidIanBonner\Enumerated\Enum;

class SubEthnicity extends Enum
{
    public const BRITISH = 'british';
    public const IRISH = 'irish';
    public const TURKISH = 'turkish';
    public const CARIBBEAN = 'caribbean';
    public const AFRICAN = 'african';
    public const INDIAN = 'indian';
    public const PAKISTANI = 'pakistani';
    public const BANGLADESHI = 'bangladeshi';
    public const WHITE_AND_BLACK_CARIBBEAN = 'white_black_caribbean';
    public const WHITE_AND_BLACK_AFRICAN = 'wihte_black_african';
    public const WHITE_AND_ASIAN = 'white_asian';
    public const OTHER = 'other';
    public const NONE = 'none';
    public const REFUSED = 'refused';

    public function langKey(): string
    {
        return 'sub-ethnicity';
    }

    public function langKeyPrefix(): string
    {
        return 'optiiva-utils::';
    }
}
