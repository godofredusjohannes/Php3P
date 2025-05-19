<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Z32</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section>

<h3>Napisz program, który losuje dwie liczby pseudolosowe z zakresu od a do b, wyświetla te liczby i określa która z nich jest większa, mniejsza, czy liczby są równe.</h3>

<form method="post" action="">

    <label for="a">a (minimalna wartość):</label>
    <input type="text" name="a" id="a"><br>

    <label for="b">b (maksymalna wartość):</label>
    <input type="text" name="b" id="b"><br>

    <input type="submit" value="Oblicz" id="button">
</form>

<div class="wynik">
<?php
if ($_SERVER ["REQUEST_METHOD"] == "POST") {

    $a = $_POST["a"];
    $b = $_POST["b"];

    $liczba1 = rand($a, $b);
    $liczba2 = rand($a, $b);

    if ($liczba1 > $liczba2) {
        echo "<h3>liczby losowana z zakresu <b>od $a do $b</b><br>Wylosowana liczba1 = $liczba1<br>Wylosowana liczba2 = $liczba2<br><b>$liczba1 > $liczba2</b></h3>";
    }
    else if ($liczba1 < $liczba2) {
        echo "<h3>liczby losowana z zakresu <b>od $a do $b</b><br>Wylosowana liczba1 = $liczba1<br>Wylosowana liczba2 = $liczba2<br><b>$liczba1 < $liczba2</b></h3>";    }
    else{
        echo "<h3>liczby losowana z zakresu <b>od $a do $b</b><br>Wylosowana liczba1 = $liczba1<br>Wylosowana liczba2 = $liczba2<br><b>$liczba1 = $liczba2</b></h3>";
    }
}
?>
</div>
</section>

</body>
</html>