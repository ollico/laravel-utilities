<?php

declare(strict_types=1);

namespace Ollico\Utilities\Helpers;

trait RegisterRelease
{
    public function registerSentryRelease(): void
    {
        if ($this->app->bound('sentry') && $this->app->environment('staging', 'production')) {
            $this->app['config']->set(
                'sentry.release',
                $this->app->environment('staging')
                    ? 'staging.'.now()->format('Y-m-dH:i:s')
                    : trim(exec('git --git-dir '.base_path('.git').' describe --tags'))
            );
        }
    }
}
