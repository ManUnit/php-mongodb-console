<?php

return [
    'default' => 'mongodb',
    'connections' => [
        'mongodb' => [
            'driver' => 'mongodb',
            'host' => env('MONGO_DB_HOST', 'oho'),
            'port' => env('MONGO_MONGO_DB_PORT', 27017),
            'database' => env('MONGO_DB_DATABASE', 'dummydb'),
            'username' => env('MONGO_MONGO_DB_USERNAME', 'maradmin'),
            'password' => env('MONGO_DB_PASSWORD', 'marpassword'),
            'options' => [     
                'database' => env('DB_AUTHENTICATION_DATABASE', 'admin'),
            ],
        ],
        
    ],
];
