<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>T551</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section>

<div class="wynik">
<?php

function polskaData() {


    $data = getdate();

    $miesiace = [
    1 => 'Styczeń',
    2 => "Luty",
    3 =>"Marzec",
    4 => "Kwiecień",
    5 => "Maj",
    6 => "Czerwiec",
    7 => "Lipiec",
    8 => "Sierpień",
    9 => "Wrzesień",
    10 => "Październik",
    11 => "Listopad",
    12 => "Grudzień"
    ];

    $dzien = $data['mday'];
    $miesiac = $miesiace[$data['mon']];
    $rok = $data['year'];


    echo $dzien, " ", $miesiac, " ", $rok;

}

polskaData(03,07,25);

?>
</div>
</section>

</body>
</html>