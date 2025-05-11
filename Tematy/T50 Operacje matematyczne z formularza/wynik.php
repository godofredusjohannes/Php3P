<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>T50</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imie = htmlspecialchars($_POST["imie"]);
    $wejscie = $_POST["liczby"];

    echo "<h2>Witaj $imie na mojej stronie!!!</h2>";

    $liczby = [];
    foreach ($wejscie as $wartosc) {
        if (is_numeric($wartosc)) {
            $liczby[] = (float)$wartosc;
        }
    }

    echo "<pre>";
    var_dump($liczby);
    echo "</pre>";

    $suma = array_sum($liczby);
    $ilosc = count($liczby);

    if ($ilosc > 0) {
        $srednia = $suma / $ilosc;
        echo "<p><strong>Suma:</strong> $suma</p>";
        echo "<p><strong>Średnia:</strong> $srednia</p>";
    } else {
        echo "<p><strong>Nie podano żadnej poprawnej liczby!</strong></p>";
    }
} else {
    echo "<p>Formularz nie został przesłany poprawnie.</p>";
}
?>
</body>
</html>