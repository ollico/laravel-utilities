<?php

declare(strict_types=1);

namespace Ollico\Utilities\Enums;

use DavidIanBonner\Enumerated\Enum;
use Illuminate\Support\Arr;

class Gender extends Enum
{
    public const MALE = 'male';
    public const FEMALE = 'female';
    public const TRANSGENDER = 'transgender';
    public const OTHER = 'other';

    public function langKey(): string
    {
        return 'gender';
    }

    public function langKeyPrefix(): string
    {
        return 'optiiva-utils::';
    }

    public function crmId(): int
    {
        $ids = [
            static::MALE => 1,
            static::FEMALE => 2,
            static::TRANSGENDER => 4,
            static::OTHER => 3,
        ];

        return Arr::get($ids, $this->value(), 0);
    }
}
