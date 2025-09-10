<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>T552</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section>

<div class="wynik">
<?php

function zenskieImiona($imiona){
    $imionaZenskie = [];

    foreach($imiona as $imie){
        if(substr($imie,-1) === 'a' && $imie != 'Kuba' && $imie != 'Barnaba'){
            $imionaZenskie[] = $imie;
        }
    }

    if (count($imionaZenskie) > 0) {
        echo "Imiona żeńskie: ".implode(", ", $imionaZenskie)."<br>";
        }
        else {
            echo "Brak imion żeńskich.";
        }
}

$imiona = ["Piotr", "Kuba", "Lena", "Mariusz", "Godofredo", "Lucyna"];

zenskieImiona($imiona);

?>
</div>
</section>

</body>
</html>