<?php

declare(strict_types=1);

namespace Ollico\Utilities\Helpers;

use Illuminate\Support\Facades\Cache;

trait RegisterRelease
{
    public function registerSentryRelease(): void
    {
        if (app()->bound('sentry') && app()->environment('staging', 'production')) {
            config()->set(
                'sentry.release',
                app()->environment('staging')
                    ? 'staging.'.now()->format('Y-m-dH:i:s')
                    : trim(exec('git --git-dir '.base_path('.git').' describe --tags'))
            );
        }
    }
}
