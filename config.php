<?php

return [
    'database' => [
        'db_dsn' => 'mysql:host=localhost;dbname=energy_drinks',
        'db_user' => 'root',
        'db_pass' => '',
        'db_options' => [
            PDO::ATTR_PERSISTENT => true, // cached and faster connection
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    ]
];
