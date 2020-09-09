<?php

declare(strict_types=1);

namespace Ollico\Utilities\Enums;

use DavidIanBonner\Enumerated\Enum;
use Illuminate\Support\Arr;

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
        return 'optiiva-utils::';
    }

    public function crmId(): int
    {
        $ids = [
            static::MR => 1,
            static::MRS => 2,
            static::MS => 3,
            static::MISS => 4,
            static::DR => 5,
            static::PROF => 6,
        ];

        return Arr::get($ids, $this->value(), 0);
    }
}
