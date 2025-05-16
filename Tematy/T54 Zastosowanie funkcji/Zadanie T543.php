<?php

$numer = 0;
function nazwaMiesiaca($numer) {
    $miesiace = [
        1 => "styczeń",
        2 => "luty",
        3 => "marzec",
        4 => "kwiecień",
        5 => "maj",
        6 => "czerwiec",
        7 => "lipiec",
        8 => "sierpień",
        9 => "wrzesień",
        10 => "październik",
        11 => "listopad",
        12 => "grudzień"
    ];

    if (isset($miesiace[$numer])) {
        return $miesiace[$numer];
    } else {
        return "Błąd";
    }
}

echo nazwaMiesiaca(5)."\n";
echo nazwaMiesiaca(13);