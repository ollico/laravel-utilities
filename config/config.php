<?php

return [

    'release_notifications' => [

        'emails' => [],

        'release_notifications' => env('UTILS_RELEASE_NOTIFICATIONS_ENABLED', env('RELEASE_NOTIFICATIONS_ENABLED', false)),

        'queue' => env('UTILS_RELEASE_NOTIFICATIONS_QUEUE', env('RELEASE_NOTIFICATIONS_QUEUE', 'mail')),

    ],

    'sitemap' => [

        'enabled' => env('UTILS_SITEMAP_ENABLED', false),

        'models' => [],

    ],

];
