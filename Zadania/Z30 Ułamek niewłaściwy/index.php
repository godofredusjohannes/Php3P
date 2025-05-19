<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Z30</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section>

    <h3>Napisz program, który: ułamek niewłaściwy w postaci licznik/mianownik zamienia na właściwy np. licznik=4 mianowmik=3 odpowiedź 1 i 1/3. W wersji podstawowej funkcja nie musi skracać ułamka.</h3>

<form method="post" action="">
    <label for="licznik">podaj licznik:</label>
    <input type="text" name="licznik" id="licznik"><br>
    <label for="mianownik">podaj mianownik:</label>
    <input type="text" name="mianownik" id="mianownik">
    <input type="submit" value="Oblicz" id="button">
</form>

<div class="wynik">
<?php
if ($_SERVER ["REQUEST_METHOD"] == "POST") {

    $licznik = $_POST["licznik"];
    $mianownik = $_POST["mianownik"];

    $wynik = floor($licznik / $mianownik);

    $reszta = $licznik % $mianownik;

    echo "<h3>Odpowiedź dla wartości licznik: $licznik<br> mianownik: $mianownik<br> $wynik <sup>$reszta</sup>&frasl;<sub>$mianownik</sub></h3>";
}
?>
</div>
</section>

</body>
</html>