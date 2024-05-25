<?php

declare(strict_types=1);

namespace Ollico\Utilities\Enums;

use DavidIanBonner\Enumerated\Enumerated;
use DavidIanBonner\Enumerated\HasEnumeration;
use Ollico\Utilities\Enums\Concerns\HasKeyPrefix;

enum BooleanOther: string implements Enumerated
{
    use HasEnumeration;
    use HasKeyPrefix {
        HasKeyPrefix::keyPrefix insteadof HasEnumeration;
    }

    case YES = 'yes';
    case NO = 'no';
    case OTHER = 'other';

    public static function key(): string
    {
        return 'boolean-other';
    }
}
