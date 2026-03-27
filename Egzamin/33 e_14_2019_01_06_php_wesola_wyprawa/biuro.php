<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Podróże dalekie i bliskie</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>

<section id="baner">
    <h1>Biuro podróży: WESOŁA WYPRAWA</h1>
</section>
<section id="ciasteczka">
<?php


if (isset($_COOKIE["ciastko"])) {

    echo "<p>Witaj ponownie na naszej stronie</p>";

}

else {

    setcookie("ciastko", "1", time() + 3600);

    echo "<p>Witaj! Nasza strona używa ciasteczek</p>";

}

?>
</section>

<section id="lewy">
    <table>
        <tr>
            <td><img src="img/polska.jpg" alt="zwiedzanie Krakowa"></td>
            <td><img src="img/wlochy.jpg" alt="Wenecja i nie tylko"></td>
        </tr>
        <tr>
            <td><img src="img/grecja.jpg" alt="gorące Greckie wyspy"></td>
            <td><img src="img/hiszpania.jpg" alt="Słoneczna Barcelona"></td>
        </tr>
    </table>
</section>

<section id="prawy">
    <h3>Proponujemy wycieczki</h3>

    <ul>
        <li>
            autokarowe
        <ol>
            <li>po Polsce z przewodnikiem</li>
            <li>do Niemiec i Czech</li>
        </ol>
        </li>
        <li>
            samolotem
            <ol>
                <li>wczasy w Grecji</li>
                <li>zwiedzanie Barcelony</li>
                <li>zwiedzanie Wenecji</li>
            </ol>
        </li>
    </ul>

    <h3>Pobierz dokumenty</h3>

    <p><a href="regulamin.txt">Regulamin korzystania z usług biura podróży</a></p>
    
    <p><a href="http://galeria.pl/" target="_blank">Tu znajdziesz zdjęcia z naszych wycieczek</a></p>
</section>

<section id="stopka">

    Stronę przygotował: Seweryn Poczynek 3P

</section>

</body>
</html>