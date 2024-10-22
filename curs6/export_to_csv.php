<?php

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
function exportToCSV(array $persons, string $filename, string $fileMode) {
    $file = fopen($filename, $fileMode);

    fwrite($file, implode(",", array_keys($persons[0])));
    fwrite($file, "\n");
    foreach ($persons as $person) {
        fwrite($file, implode(",", $person) . "\n");
    }
    fclose($file);
}
