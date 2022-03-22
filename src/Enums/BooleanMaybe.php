<?php

declare(strict_types=1);

namespace Ollico\Utilities\Enums;

use DavidIanBonner\Enumerated\Enumerated;
use DavidIanBonner\Enumerated\HasEnumeration;

enum BooleanMaybe: string implements Enumerated
{
    use HasEnumeration;

    case YES = 'yes';
    case NO = 'no';
    case MAYBE = 'maybe';

    public static function key(): string
    {
        return 'boolean-maybe';
    }

    public function langKeyPrefix(): string
    {
        return 'laravel-utils::';
    }
}
