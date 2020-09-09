<?php

declare(strict_types=1);

namespace Ollico\Utilities\Enums;

use DavidIanBonner\Enumerated\Enum;

class Weight extends Enum
{
    public const LBS = 'lbs';
    public const ST = 'st';

    public function langKey(): string
    {
        return 'weight';
    }

    public function langKeyPrefix(): string
    {
        return 'optiiva-utils::';
    }
}
