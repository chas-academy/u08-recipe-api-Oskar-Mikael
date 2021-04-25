<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['/*', 'api/', 'sanctum/csrf-cookie', 'public/**/*', '/public/*'],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['http://localhost:4200'],

    'allowed_origins_patterns' => ['*'],

    'allowed_headers' => [
        'Accept',
        'Authorization',
        'Content-Type',
        'Cookie',
        'DNT',
        'Origin',
        'User-Agent',
        'X-Requested-With',
    ],

    'exposed_headers' => [
        'Accept',
        'Authorization',
        'Origin',
        'Content-Type',
        'X-Requested-With',
    ],

    'max_age' => 0,

    'supports_credentials' => true,

];
