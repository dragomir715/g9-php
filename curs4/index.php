<?php

$cars = ['BMW', 'Volvo', 'Audi'];    //array indexat
$cars2[] = 'Audi';
$cars2[] = 'Opel';

echo $cars[1];
                       //array asocativ
$names = [
    'nume1' => 'Maria',
    'nume2' => 'Lorena',
    'nume3' => 'Irina',
    'nume4' => 'Andrei',
    'nume5' => 'Ionut',
];

echo '<br>';
echo $names['nume4'];

//alt stil de a scrie acelas array

$names2['nume1'] = 'Marian';
$names2['nume2'] = 'ionut';

//array multidimensional

$garage = [
     ['brand' => 'BMW', 'gas_type' => 'diesel', $cars],
     ['brand' => 'Audi', 'gas_type' => 'GPL'],
];

echo '<br>';
echo $garage[1]['brand'];
echo '<br>';
echo $garage[0][0][0]; //second index is for $carss element

foreach($garage as $key => $car) {
    echo '<br>' . $key . '. ' . $car['brand'];
}


echo '<hr>';
$animals = ['dog','cat', 'mouse', 'elephant', 'bird'];
sort($animals);
print_r($animals);
echo '<hr>';
rsort($animals);
print_r(asort($animals));

$colors = [
    'color1' => 'red',
    'color2' => 'green',
    'color3' => 'blue',
    'color4' => 'yellow',
    'color5' => 'black',
];
asort($colors);
print_r($colors);
echo '<br>';
ksort($colors);
print_r($colors);

echo 'hr';
$cities = [
    'city2' => 'Bucuresti',
    'city5' => 'Cluj',
    'city1' => 'Timisoara',
    'city7' => 'Iasi',
];
arsort($cities);
print_r($cities);

echo '<br>';

krsort($cities);
print_r($cities);

echo '<br>';
if (in_array('Timisoara', $cities)) {
echo 'Timisoara is found in the array.';
} else {
    echo 'Timisoara is not found in the array.';
}

echo '<hr>';

$citiesMultiple = array_chunk($cities, 2, true);

echo '<pre>';

print_r($citiesMultiple);

echo '<hr>';

$column = array_column($garage, 'brand');
print_r($column);

echo '<hr>';

$array_keys = ['first', 'second'];
$array_values = ['Marian', 'Alex'];
$array_combined = array_combine($array_keys, $array_values);
print_r($array_combined);
