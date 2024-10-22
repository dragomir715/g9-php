<?php

echo 'Hello world!'; 

// comment inline

# comment line

/* 
multi line
comment
*/

/**
 * doc block comment
 * 
 */
 echo '<br/>';

 $a = 5.2;
 echo $a;
 echo '<br/>';
 var_dump($a);


$nume = 'Marian $a';
$prenume = "Trifu $a";
echo '<br/>';
var_dump($nume);
echo '<br/>';
var_dump($prenume);
$myName = ''; //empty string

$bool = false;
echo '<br/>';
var_dump($bool);

$array = array(5, 'Marian', true);
$array2 = ['alex', false, 3.4, $a, $array];

echo '<br/>';
var_dump($array, $array2); // accepts multiple variables

class MyObject {
    
}

$myObject1 = new MyObject();
$myObject2 = new MyObject();                                                 //php.net - documentatie oficiala
echo '<br/>';
var_dump($myObject1, $myObject2);


$nullable = null;
echo '<br/>';
var_dump($nullable);

if (isset($nullable)) {
    echo'variable is null';
}
else {
    echo 'variable is not null';
}

define('GREETINGS', 'Hello from my first PHP lesson!');
echo '<br/>';
echo GREETINGS;
echo '<br/>';
echo M_PI;

