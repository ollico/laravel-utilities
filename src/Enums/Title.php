<?php

declare(strict_types=1);

namespace Ollico\Utilities\Enums;

use DavidIanBonner\Enumerated\Enumerated;
use DavidIanBonner\Enumerated\HasEnumeration;
use Ollico\Utilities\Enums\Concerns\HasKeyPrefix;

enum Title: string implements Enumerated
{
    use HasEnumeration;
    use HasKeyPrefix {
        HasKeyPrefix::keyPrefix insteadof HasEnumeration;
    }

    case MR = 'mr';
    case MRS = 'mrs';
    case MS = 'ms';
    case MISS = 'miss';
    case DR = 'dr';
    case PROF = 'prof';

    public static function key(): string
    {
        return 'title';
    }
}
