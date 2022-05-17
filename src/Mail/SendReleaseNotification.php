<?php

declare(strict_types=1);

namespace Ollico\Utilities\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendReleaseNotification extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {
        return $this
            ->to(config('ollico.emails'))
            ->subject('Release notification')
            ->markdown('utils::release-notifications');
    }
}
