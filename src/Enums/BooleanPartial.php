<?php

declare(strict_types=1);

namespace Ollico\Utilities\Enums;

use DavidIanBonner\Enumerated\Enumerated;
use DavidIanBonner\Enumerated\HasEnumeration;

enum BooleanPartial: string implements Enumerated
{
    use HasEnumeration;

    case YES = 'yes';
    case NO = 'no';
    case PARTIAL = 'partial';

    public static function key(): string
    {
        return 'boolean-partial';
    }

    public function langKeyPrefix(): string
    {
        return 'laravel-utils::';
    }
}
