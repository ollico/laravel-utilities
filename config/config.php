<?php

return [

    'prefix' => env('UTILS_ROUTE_PREFIX', 'ollicoUtils'),

    'middleware' => env('UTILS_ROUTE_MIDDLEWARE', 'web'),

    'release_notifications' => [

        'emails' => [],

        'release_notifications' => env('RELEASE_NOTIFICATIONS_ENABLED', false),

        'queue' => env('RELEASE_NOTIFICATIONS_QUEUE', 'mail'),

    ],

];
