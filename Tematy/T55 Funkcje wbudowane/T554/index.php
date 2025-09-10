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

function sprawdzdate($yy, $mm, $dd)
{

    $rok = 2000 + (int)$yy;
    $miesiac = (int)$mm;
    $dzien = (int)$dd;

    if (!checkdate($miesiac, $dzien, $rok)) {
        echo "Błędna data";
        return;
    }

    $dataWejsciowa = DateTime::createFromFormat('Y-m-d', "$rok-$miesiac-$dzien");
    $dzisiaj = new DateTime();

    if ($dataWejsciowa < $dzisiaj) {
        echo "Historia<br>";
    }

    else {
        echo "Przeszlosc lub terazniejszosc<br>";
    }
}

sprawdzdate(27,03,06);
sprawdzdate(06,02,11);

?>
</div>
</section>

</body>
</html>