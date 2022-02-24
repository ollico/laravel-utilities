<?php

declare(strict_types=1);

namespace Ollico\Utilities\Enums;

use DavidIanBonner\Enumerated\Enumerated;
use DavidIanBonner\Enumerated\HasEnumeration;

enum Gender: string implements Enumerated
{
    use HasEnumeration, Concerns\HasKeyPrefix {
        Concerns\HasKeyPrefix::keyPrefix insteadof HasEnumeration;
    }

    case MALE = 'male';
    case FEMALE = 'female';
    case TRANSGENDER = 'transgender';
    case OTHER = 'other';

    public static function key(): string
    {
        return 'gender';
    }
}
