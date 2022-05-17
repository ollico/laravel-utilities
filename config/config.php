<?php

return [

    'release_notifications' => [

        'emails' => [],

        'release_notifications' => env('RELEASE_NOTIFICATIONS_ENABLED', false),

        'queue' => env('RELEASE_NOTIFICATIONS_QUEUE', 'mail'),

    ],

];
