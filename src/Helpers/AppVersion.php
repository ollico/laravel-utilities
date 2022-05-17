<?php

declare(strict_types=1);

namespace Ollico\Utilities\Helpers;

use Illuminate\Support\Facades\Cache;

class AppVersion
{
    public static function retrieve(): string
    {
        return Cache::remember('ollico:version-tag', now()->addWeek(), function () {
            if (!file_exists(public_path('release.txt'))) {
                return 'unversioned-dev';
            }

            $version = preg_replace(
                '/.+\\n(v[0-9]{1,9}\\.[0-9]{1,9}\\.[0-9]{1,9})/u',
                '$1',
                file_get_contents(public_path('release.txt'))
            );

            return trim($version);
        });
    }
}
