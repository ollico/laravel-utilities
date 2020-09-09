<?php

declare(strict_types=1);

namespace Ollico\Utilities;

use Illuminate\Support\ServiceProvider;

class LaravelUtilitiesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../lang', 'laravel-utils');
    }
}
