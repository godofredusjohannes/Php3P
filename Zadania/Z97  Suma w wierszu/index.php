<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z97</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 97</h1>
    <h2>Autor: Seweryn Poczynek 3P</h2>
    <p>Napisz program, który wczytuje liczby do tablicy o wymiarach n x m i oblicza sumę wartości we wskazanym wierszu. Numer wiersza podaje użytkownik (numerowanie od 0). Użytkownik wprowadza n, m, liczby do komponentu textarea oddzielone przecinkami oraz numer wiersza. Program powinien zweryfikować, czy n, m i numer wiersza są liczbami całkowitymi, czy podane wartości są liczbami, czy ich liczba zgadza się z n x m, a następnie wyświetlić tablicę i sumę wartości w wybranym wierszu.</p>
    <p><b>Wskazówki dla ucznia:</b></p>
    <ul>
        <li>Sprawdź, czy n, m i numer wiersza są liczbami całkowitymi (is_numeric() i is_int() po konwersji).</li>
        <li>Użyj explode(), aby rozdzielić ciąg z textarea na tablicę liczb na podstawie przecinków.</li>
        <li>Zweryfikuj, czy każda wartość jest liczbą za pomocą is_numeric().</li>
        <li>Przekształć jednowymiarową tablicę na dwuwymiarową, rozdzielając ją na wiersze po m elementów.</li>
        <li>Użyj array_sum() lub pętli, aby obliczyć sumę wartości w wybranym wierszu.</li>
        <li>Zabezpiecz dane wejściowe za pomocą htmlspecialchars() przy pobieraniu, aby chronić przed XSS.</li>
    </ul>
</header>
<section>
<form method="post">

    <label for="n">Liczba wierszy(n):</label><br>
    <input type="number" name="n" id="n"><br>
    <label for="m">Liczba kolumn(m):</label><br>
    <input type="number" name="m" id="m"><br>
    <label for="numer">Numer wiersza (0 do n-1):</label><br>
    <input type="number" name="numer" id="numer"><br>
    <label for="wartosci">Wartosci tablicy (liczby oddzielone przecinkami):</label><br>
    <textarea name="wartosci" id="wartosci" cols="30" rows="10"></textarea><br>
    <button type="submit">Wyslij</button>
</section>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $n = htmlspecialchars($_POST["n"]);
    $m = htmlspecialchars($_POST["m"]);
    $numer = htmlspecialchars($_POST["numer"]);
    $wartosci = htmlspecialchars($_POST["wartosci"]);

    if (!is_numeric($n) || !is_numeric($m) || !is_numeric($numer)) {
        echo "Błąd: n, m i numer wiersza muszą być liczbami.";
        exit;
    }

    $n = (int)$n;
    $m = (int)$m;
    $numer = (int)$numer;

    if ($n <= 0 || $m <= 0) {
        echo "Błąd: n i m muszą być większe od 0.";
        exit;
    }

    if ($numer < 0 || $numer >= $n) {
        echo "Błąd: numer wiersza poza zakresem.";
        exit;
    }

    $tablica = explode(",", $wartosci);

    $tablica = array_map('trim', $tablica);

    if (count($tablica) != $n * $m) {
        echo "Błąd: liczba wartości musi wynosić n * m.";
        exit;
    }

    foreach ($tablica as $val) {
        if (!is_numeric($val)) {
            echo "Błąd: wszystkie wartości muszą być liczbami.";
            exit;
        }
    }

    $tablica2D = [];
    $index = 0;

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $m; $j++) {
            $tablica2D[$i][$j] = $tablica[$index];
            $index++;
        }
    }

    echo "<h3>Tablica:</h3>";
    echo "<table border='1' cellpadding='5'>";

    for ($i = 0; $i < $n; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $m; $j++) {
            echo "<td>" . $tablica2D[$i][$j] . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";

    $suma = array_sum($tablica2D[$numer]);

    echo "<h3>Suma wiersza $numer: $suma</h3>";
}
?>

</body>
</html>