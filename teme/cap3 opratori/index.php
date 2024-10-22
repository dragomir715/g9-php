<?php

function adunare($a, $b = 2, $c = 3){


return $a + $b + $c;

}
echo adunare(6.2,7,9);
echo '<br>';
function patru($a, $b){
return $a . $b;

}
$rezultat = patru(6.2,7);
echo gettype($rezultat);
echo '<br>';


function dp($nr1, $nr2)
{
    $r1 = $nr1 + $nr2;
    $r2 = $nr1 - $nr2;
    $r3 = $nr1 * $nr2;
    $r4 = $nr1 / $nr2;
    $r5 = $nr1 % $nr2;
    $r6 = $nr1 ** $nr2;
    $comparare = $r1;
    $operatie = 'adunare';

    if($comparare < $r2){
        $comparare = $r2;
        $operatie = 'scadere';
    }

    if($comparare < $r3){
        $comparare = $r3;
        $operatie = 'inmultire';
    }
    if($comparare < $r4){
        $comparare = $r4;
        $operatie = 'impartire';
    }
    if($comparare < $r5){
        $comparare = $r5;
        $operatie = 'procente';
    }
    if($comparare < $r6){
        $comparare = $r6;
        $operatie = 'ridicarep';
    }

    return $operatie;
}

echo dp(2, 3);
echo '<br>';
$parametru = 5;
function tabla($a)
{
    echo $a * 0;
    echo '<br>';
    echo $a * 1;
    echo '<br>';

    echo $a * 2;
    echo '<br>';

    echo $a * 3;
    echo '<br>';

    echo $a * 4;
    echo '<br>';

    echo $a * 5;
    echo '<br>';

    echo $a * 6;
    echo '<br>';

    echo $a * 7;
    echo '<br>';

    echo $a * 8;
    echo '<br>';

    echo $a * 9;
    echo '<br>';

    echo $a * 10;
    echo '<br>';

    if(0 <= $a && $a <= 10){
        echo 'Este in interval';

        return;
    }

    echo 'Nu este in interval';
}

tabla($parametru);