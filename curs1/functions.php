<?php
declare(strict_types=1)

function showMessage()
{
        echo 'message';
}

function returnMessage()
{
    return 'message returned';
}

showMessage();

echo '<br/>';

$message2 = returnMessage();
var_dump($message2);

function showName($name = 'Madalin')
{
    echo 'My name is; ' . $name;
}

echo '<br/>';
showName('Marian');
echo '<br/>';
showName('Alex');
echo '<br/>';
showName();

function addNumbers (int $a, int $b): int
{
    echo $a / $b;
}

echo '<br/>';
addNumbers(1, 1);
addNumbers(1, '5');
