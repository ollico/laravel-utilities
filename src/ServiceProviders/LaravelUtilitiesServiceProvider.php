<?php

declare(strict_types=1);

namespace Ollico\Utilities\ServiceProviders;

use Illuminate\Database\Query\Expression;
use Illuminate\Database\Schema\Blueprint;
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
        include_once __DIR__ . '/../helper.php';

        $this->loadTranslationsFrom(__DIR__ . '/../lang', 'laravel-utils');

        Blueprint::macro('guid', function (): void {
            /** @var \Illuminate\Database\Schema\Blueprint $this */
            $this->uuid('guid')->index()->default(
                config('database.default') === 'pgsql'
                    ? new Expression('(uuid_generate_v4())')
                    : null
            );
        });
    }
}
