<?php

declare(strict_types=1);

namespace Ollico\Utilities\Enums;

use DavidIanBonner\Enumerated\Enumerated;
use DavidIanBonner\Enumerated\HasEnumeration;

enum Boolean: string implements Enumerated
{
    use HasEnumeration;

    case YES = 'yes';
    case NO = 'no';

    public static function key(): string
    {
        return 'boolean';
    }

    public function langKeyPrefix(): string
    {
        return 'laravel-utils::';
    }
}
