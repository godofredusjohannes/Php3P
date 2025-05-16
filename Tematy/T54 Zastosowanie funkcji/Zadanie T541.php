<?php

function wbz1($x)
{
    if ($x > 0) {
        return $x;
    }
    else{
        return $x * -1;
    }
}

function wbz2($x){
    $wynik = ($x > 0) ? $x : $x * -1;
    return $wynik;
}


echo wbz1(-1)."\n";

echo wbz1(34)."\n";

echo wbz2(-1)."\n";

echo wbz2(34);