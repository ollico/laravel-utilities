<?php

declare(strict_types=1);

namespace Ollico\Utilities\Enums;

use DavidIanBonner\Enumerated\Enumerated;
use DavidIanBonner\Enumerated\HasEnumeration;

enum BooleanOptional: string implements Enumerated
{
    use HasEnumeration, Concerns\HasKeyPrefix {
        Concerns\HasKeyPrefix::keyPrefix insteadof HasEnumeration;
    }

    case YES = 'yes';
    case NO = 'no';
    case PREFER_NOT = 'prefer_not';

    public static function key(): string
    {
        return 'boolean-optional';
    }
}
