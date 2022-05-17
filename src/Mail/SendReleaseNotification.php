<?php

declare(strict_types=1);

namespace Ollico\Utilities\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Ollico\Utilities\Helpers\AppVersion;

class SendReleaseNotification extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {
        return $this
            ->to(config('ollico.utils.release_notifications.emails'))
            ->subject('Notification of release')
            ->markdown('utils::release-notifications', [
                'version' => AppVersion::retrieve(),
            ]);
    }
}
