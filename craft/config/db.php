<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */

return [
    'console' => [
        'server' => '192.168.10.10',
        'database' => 'website-name',
        'user' => 'homestead',
        'password' => 'password',
    ],

    'testing.website-name' => [
        'server' => '192.168.10.10',
        'database' => 'website-name',
        'user' => 'homestead',
        'password' => 'password',
    ],

    'local.website-name' => [
        'server' => '192.168.10.10',
        'database' => 'website-name',
        'user' => 'homestead',
        'password' => 'password',
    ],

    'website-name.co.uk' => [
        'server' => '127.0.0.1',
        'database' => 'website-name',
        'user' => 'root',
        'password' => 'root',
    ],

    'staging.website-name.co.uk' => [
        'server' => '127.0.0.1',
        'database' => 'website-name',
        'user' => 'root',
        'password' => 'root',
    ],

    '*' => [
        'tablePrefix' => 'craft',
    ]
];
