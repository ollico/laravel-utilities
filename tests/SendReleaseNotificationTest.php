<?php

namespace Ollico\Utilities\Tests;

use Illuminate\Support\Facades\Artisan;
use Ollico\Utilities\Validation\Sanitizer;
use Orchestra\Testbench\TestCase;

class SendReleaseNotificationTest extends TestCase
{
    /** @test */
    function it_will_send_notification()
    {
        //Artisan::call('system:send-release-notification');
    }
}
