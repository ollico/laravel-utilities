<?php

declare(strict_types=1);

namespace Ollico\Utilities\ServiceProviders;

use Illuminate\Database\Query\Expression;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rule;
use Ollico\Utilities\Validation\RequiredIfInArray;

class LaravelUtilitiesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/../../lang', 'laravel-utils');

        Blueprint::macro('guid', function (): void {
            /** @var \Illuminate\Database\Schema\Blueprint $this */
            $this->uuid('guid')->unique()->default(
                config('database.default') === 'pgsql'
                    ? new Expression('(uuid_generate_v4())')
                    : null
            );
        });

        $this->registerRules();
    }

    protected function registerRules(): void
    {
        Rule::macro('requiredIfInArray', function (array $data, string $key, $value) {
            return new RequiredIfInArray($data, $key, $value);
        });
    }
}
