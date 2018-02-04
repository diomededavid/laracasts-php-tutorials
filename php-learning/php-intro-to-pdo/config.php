<?php
/**
 * Created by PhpStorm.
 * User: daviddiomede
 * Date: 1/17/18
 * Time: 7:21 AM
 */
return [
    'database' => [
        'connection' => 'mysql:host = 127.0.0.1',
        'name'       => 'mytodo',
        'username'   => 'root',
        'password'   => 'shadow',
        'options'   => [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]

    ]
];