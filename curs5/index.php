<?php

echo "Hello \"World!\"\\ \$ \n \t test";


echo '$';

echo '<br> Salut de la \'mare\'';

echo '<br>';
$string = 'Hello from the future!';
echo strlen($string);

echo '<br>';
echo str_word_count($string);

echo '<br>';
echo strrev($string);

echo '<br>';
echo strpos($string, 'the');
echo '<br>';
var_dump(strpos($string, 'them'));
echo '<br>';
echo str_replace( 'future', 'past', $string );
echo '<br>';
echo substr($string, 0, 5);
echo '<br>';
echo substr($string, 6, 4);
echo '<br>';
echo substr($string, -7, 6);
echo '<br>';
echo strtolower($string);
echo '<br>';
echo strtolower($string);
echo '<br>';
echo ucfirst($string);
echo '<br>';
echo ucwords($string);
echo '<br>';
$name = 'Marian     &nbsp;';
echo $name . trim($name) . $name;
echo '<br>';
$strings = explode(' ', $string);
echo '<pre>';
print_r($strings);
$array = str_split($string);
$array2 = str_split($string, 4);
print_r($array);
print_r($array2);
echo implode(',', $strings);
echo '<br>';
echo str_repeat('+', 10);
echo md5('mypassword');
