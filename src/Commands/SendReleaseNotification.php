<?php

declare(strict_types=1);

namespace Ollico\Utilities\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Ollico\Utilities\Mail\SendReleaseNotification;

class AnonymizeUserDataCommand extends Command
{
    protected $signature = 'system:send-release-notification';

    protected $description = 'Sends notification on release to select emails';

    public function handle()
    {
        if (config('ollico.release_notifications', false)) {
            Mail::queue(SendReleaseNotification::class)->onQueue('mail');
        }
    }
}
