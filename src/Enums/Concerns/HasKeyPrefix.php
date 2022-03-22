<?php

namespace Ollico\Utilities\Enums\Concerns;

trait HasKeyPrefix
{
    public static function keyPrefix(): string
    {
        return 'laravel-utils::';
    }
}
