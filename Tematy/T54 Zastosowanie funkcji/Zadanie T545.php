<?php

$a = 0;

$b = 0;

function wspolnyDzielnik($a, $b) {
    $a = abs($a);
    $b = abs($b);

    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }

    echo "Największy wspólny dzielnik: $a";
}

wspolnyDzielnik(36, 60);