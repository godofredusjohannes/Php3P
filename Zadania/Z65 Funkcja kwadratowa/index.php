<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Z65</title>
</head>
<body>
<header>
    <h1>Zadanie Z65</h1>
    <h2>Autor: Seweryn Poczynek</h2>
    <p>Napisz program, który oblicza pierwiastki równania kwadratowego. Program dla danych A, B i C ma sprawdzać czy równanie jest kwadratowe, czy ma jeden czy dwa pierwiastki i czy ma rozwiązanie.</p>
</header>
<section>
    <form action="" method="post">
        Podaj liczbę A: <input type="number" name="a"><br>
        Podaj liczbę B: <input type="number" name="b"><br>
        Podaj liczbę C: <input type="number" name="c"><br>
        <button type="submit">Wyślij</button>
    </form>
</section>
<section>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    if ($a == 0) {
        echo "<p><b>To nie jest równanie kwadratowe</b></p>";
    }
    else {
            echo "A = $a<br>B = $b<br>C = $c<br>";

            echo "Postac rownania f(x) = $a * x^2 + $b * x + $c";

            $delta = $b * $b - 4 * $a * $c;


            if ($delta > 0) {
                $x1 = (-$b - sqrt($delta)) / (2 * $a);
                $x2 = (-$b + sqrt($delta)) / (2 * $a);
                echo "<p><strong>Równanie ma dwa pierwiastki rzeczywiste:</strong></p>";
                echo "<p>x1 = " . round($x1, 2) . "<br>x1 = " . round($x2, 2) . "</p>";
            } else if ($delta = 0) {
                $x0 = (-$b - sqrt($delta)) / (2 * $a);
                echo "<p><strong>Równanie ma jeden pierwiastek (podwójny):</strong></p>";
                echo "<p>x0 = " . round($x0, 2) . "</p>";
            } else {
                echo "<p><strong>Równanie nie ma pierwiastków rzeczywistych</strong> (delta < 0).</p>";
            }
        }
}
?>
</section>
</body>
</html>
