<?php

declare(strict_types=1);

namespace Ollico\Utilities\Concerns;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory as BaseHasFactory;

trait HasFactory
{
    use BaseHasFactory;

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory()
    {
        return Factory::factoryForModel(basename(str_replace('\\', '/', get_called_class())));
    }
}
