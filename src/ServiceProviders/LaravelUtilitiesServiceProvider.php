<?php

declare(strict_types=1);

namespace Ollico\Utilities\ServiceProviders;

use Illuminate\Database\Query\Expression;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rule;
use Ollico\Utilities\Commands\SendReleaseNotification;
use Ollico\Utilities\Sitemap\SeoSitemap;
use Ollico\Utilities\Validation\RequiredIfInArray;

class LaravelUtilitiesServiceProvider extends ServiceProvider
{
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

        $this->loadViewsFrom(__DIR__ . '/../views', 'utils');

        $this->registerConfig();

        $this->registerCommands();

        $this->registerRules();

        $this->registerRoutes();
    }

    public function register(): void
    {
        $this->app->bind(SeoSitemap::class, function () {
            return new SeoSitemap(config('ollico.utils.models'));
        });
    }

    protected function registerCommands(): void
    {
        if (!$this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            SendReleaseNotification::class,
        ]);
    }

    protected function registerConfig(): void
    {
        $this->publishes([
            $this->packagePath('config/config.php') => config_path('ollico/config.php')
        ], 'config');

        $this->mergeConfigFrom($this->packagePath('config/config.php'), 'ollico.utils');
    }

    protected function registerRules(): void
    {
        Rule::macro('requiredIfInArray', function (array $data, string $key, $value) {
            return new RequiredIfInArray($data, $key, $value);
        });
    }

    protected function registerRoutes(): void
    {
        $this->loadRoutesFrom(__DIR__. ' /../../routes/routes.php');
    }

    protected function packagePath($path = ''): string
    {
        return sprintf('%s/../../%s', __DIR__, $path);
    }
}
