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

echo wbz1(-1)."<br>";

echo wbz1(34);