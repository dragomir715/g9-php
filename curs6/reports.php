<?php

require_once 'export_to_csv.php';
$persons = [
    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'phone' => '0123456789',
        'email' => 'john@doe.com',

    ],
    [
        'first_name' => 'Alex',
        'last_name' => 'Andrei',
        'phone' => '0123456789',
        'email' => 'youand@doe.com',

    ],
    [
        'first_name' => 'Marin',
        'last_name' => 'YO',
        'phone' => '0123456789',
        'email' => 'john@doe.com',

    ],
    [
        'first_name' => 'Matei',
        'last_name' => 'Eric',
        'phone' => '0123456789',
        'email' => 'john@doe.com',

    ],
];

exportToCSV($persons, 'persons.csv', 'w+');