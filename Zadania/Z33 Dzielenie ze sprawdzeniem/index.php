<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Z33</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section>

<h3>Napisz program, który:
    dla liczb całkowitych A i B sprawdza czy B nie jest równe 0 i tylko w tym wypadku wykonuje dzielenie. Program powinien sprawdzić również, czy podana liczba nie jest rzeczywista.</h3>

<form method="post" action="">

    <label for="a">podaj a:</label>
    <input type="text" name="a" id="a"><br>

    <label for="b">podaj b:</label>
    <input type="text" name="b" id="b"><br>

    <input type="submit" value="Oblicz" id="button">
</form>

<div class="wynik">
<?php
if ($_SERVER ["REQUEST_METHOD"] == "POST") {

    $a = $_POST["a"];
    $b = $_POST["b"];

    if ($b != 0) {
        $wynik = $a / $b;
        echo "<h3>a = $a<br>b = $b<br>Wynik dzielenia: $a / $b = $wynik</h3>";
    }
    else{

        echo "<h3>a = $a<br>b = $b<br>Nie można dzielić przez 0.</h3>";
    }
}
?>
</div>
</section>

</body>
</html>