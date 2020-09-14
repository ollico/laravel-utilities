<?php

declare(strict_types=1);

namespace Ollico\Utilities\ServiceProviders;

use Illuminate\Database\Query\Expression;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\ServiceProvider;

class GuidServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Blueprint::macro('guid', function (): void {
            /** @var \Illuminate\Database\Schema\Blueprint $this */
            $this->uuid('uuid')->index()->default(new Expression('(uuid_generate_v4())'));
        });
    }
}
