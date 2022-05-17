<?php

namespace Ollico\Utilities\Tests;

use Illuminate\Support\Facades\Mail;
use Ollico\Utilities\Mail\SendReleaseNotification;
use Ollico\Utilities\ServiceProviders\LaravelUtilitiesServiceProvider;
use Orchestra\Testbench\TestCase;

class SendReleaseNotificationTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            LaravelUtilitiesServiceProvider::class,
        ];
    }

    protected function setUp(): void
    {
        parent::setUp();

        app('config')->set('ollico.utils.release_notifications.emails', [
            'test1@test-foo-bar-unknown.com',
            'test2@test-foo-bar-unknown.com',
        ]);

        app('config')->set('ollico.utils.release_notifications.enabled', true);

        app('config')->set('ollico.utils.release_notifications.queue', 'mail');
    }

    /** @test */
    function it_will_send_notification()
    {
        Mail::fake();

        $this->artisan('system:send-release-notification')->assertSuccessful();

        Mail::assertQueued(SendReleaseNotification::class, function ($mail) {
            $to = $mail->build()->to;

            foreach ($to as $item) {
                if (!in_array($item['address'], config('ollico.utils.release_notifications.emails'))) {
                    return false;
                }
            }

            return $mail->queue === config('ollico.utils.release_notifications.queue');
        });
    }
}
