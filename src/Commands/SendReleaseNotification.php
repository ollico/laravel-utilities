<?php

declare(strict_types=1);

namespace Ollico\Utilities\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Ollico\Utilities\Mail\SendReleaseNotification as SendMail;

class SendReleaseNotification extends Command
{
    protected $signature = 'system:send-release-notification';

    protected $description = 'Sends notification on release to select emails';

    public function handle()
    {
        if (config('ollico.utils.release_notifications.enabled')) {
            Mail::queue(
                (new SendMail())->onQueue(config('ollico.utils.release_notifications.queue'))
            );
        }
    }
}
