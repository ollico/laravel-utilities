<?php

declare(strict_types=1);

namespace Ollico\Utilities\Enums;

use DavidIanBonner\Enumerated\Enumerated;
use DavidIanBonner\Enumerated\HasEnumeration;
use Ollico\Utilities\Enums\Concerns\HasKeyPrefix;

enum BooleanOptionalUnsure: string implements Enumerated
{
    use HasEnumeration;
    use HasKeyPrefix {
        HasKeyPrefix::keyPrefix insteadof HasEnumeration;
    }

    case YES = 'yes';
    case NO = 'no';
    case PREFER_NOT = 'prefer_not';
    case DONT_KNOW = 'dont_know';

    public static function key(): string
    {
        return 'boolean-optional-unsure';
    }
}
