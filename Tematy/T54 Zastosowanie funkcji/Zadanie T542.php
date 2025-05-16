<?php

$x = 0;

$y = 0;

function oblicz($x, $y)
{
    $wynik = 1;
    for ($i = 0; $i < $y; $i++) {
        $wynik *= $x;
    }
    return $wynik;
}

echo oblicz(2,3);