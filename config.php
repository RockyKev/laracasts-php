<?php


return [
    'database' => [
        'name' => 'laracast_todo',
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,

        ]
    ]

];
