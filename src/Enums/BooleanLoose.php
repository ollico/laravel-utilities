<?php

declare(strict_types=1);

namespace Ollico\Utilities\Enums;

use DavidIanBonner\Enumerated\Enumerated;
use DavidIanBonner\Enumerated\HasEnumeration;

enum BooleanLoose: string implements Enumerated
{
    use HasEnumeration;

    case YES = 'yes';
    case NO = 'no';
    case UNSURE = 'unsure';

    public static function key(): string
    {
        return 'boolean-loose';
    }

    public function langKeyPrefix(): string
    {
        return 'laravel-utils::';
    }
}
