<?php

declare(strict_types=1);

namespace Ollico\Utilities\Enums;

use DavidIanBonner\Enumerated\Enumerated;
use DavidIanBonner\Enumerated\HasEnumeration;

enum Title: string implements Enumerated
{
    use HasEnumeration;

    public const MR = 'mr';
    public const MRS = 'mrs';
    public const MS = 'ms';
    public const MISS = 'miss';
    public const DR = 'dr';
    public const PROF = 'prof';

    public static function key(): string
    {
        return 'title';
    }

    public function langKeyPrefix(): string
    {
        return 'laravel-utils::';
    }
}
