<?php

$db = mysqli_connect("localhost", "root", "", "motory");

?>
<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Motocykle</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
<img src="img/motor.png" alt="motocykl" id="motor">
<header id="baner">
    <h1>Motocykle - moja pasja</h1>
</header>
<section id="lewy">
    <h2>Gdzie pojechać?</h2>
    <?php
    $sql = "SELECT `nazwa`,`opis`,`poczatek`,`zrodlo` FROM wycieczki INNER JOIN zdjecia ON zdjecia.id = wycieczki.zdjecia_id";

    $zapytanie2 = mysqli_query($db, $sql);

    echo "<ul>";

    while ($el = mysqli_fetch_row($zapytanie2)) {
        $zrodlo = "img/".$el[3].".jpg";
        echo "<li><p id='bialy'>".$el[0].", rozpoczyna się w ".$el[3]." <a href='$zrodlo'>zobacz zdjęcie</a></p>"."<p id='element'>".$el[1]."</p></li>";
    }

    echo "</ul>";

    ?>
</section>
<section id="prawy1">
    <h2>Co kupić?</h2>
    <ol>
        <li>Honda CBR125R</li>
        <li>Yamaha YBR125</li>
        <li>Honda VFR800i</li>
        <li>Honda CBR1100XX</li>
        <li>BMW R1200GS LC</li>
    </ol>
</section>
<section id="prawy2">
    <h2>Statystyki</h2>
    <p>Wpisanych wycieczek:
        <?php
        $sql2 = "SELECT COUNT(*) AS iloscWycieczek FROM wycieczki;";

        $zapytanie3 = mysqli_query($db, $sql2);
        $wynik = mysqli_fetch_row($zapytanie3);
        echo $wynik[0];
        mysqli_close($db);
        ?>
    </p>
    <p>Użytkowników forum: 200</p>
    <p>Przesłanych zdjęć: 1300</p>
</section>
<footer id="stopka">
    <p>Stronę wykonał: Seweryn Poczynek 3P</p>
</footer>
</body>
</html>