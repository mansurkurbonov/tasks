<?php

return [
    'database' => [
        'name' => 'database_name',
        'username' => 'user_name',
        'password' => 'pass',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        ]
    ]
];
