<?php

return [
    'default' => 'mongodb',
    'connections' => [
        'mongodb' => [
            'driver' => 'mongodb',
            'host' => env('MONGO_DB_HOST', 'oho'),
            'port' => env('MONGO_MONGO_DB_PORT', 27017),
            'database' => env('MONGO_DB_DATABASE', 'shopping'),
            'username' => env('MONGO_MONGO_DB_USERNAME', 'root'),
            'password' => env('MONGO_DB_PASSWORD', 'richly'),
            'options' => [     
                'database' => env('DB_AUTHENTICATION_DATABASE', 'admin'),
            ],
        ],
        
    ],
];
