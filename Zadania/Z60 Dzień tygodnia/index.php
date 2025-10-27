<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Z60</title>
</head>
<body>
<header>
    <h1>Zadanie Z60</h1>
    <h2>Autor: Seweryn Poczynek</h2>
    <p>Napisz program, który dla podanej liczby całkowitej z przedziału od 1 do 7 wypisuje jaki to dzień tygodnia. Zakładamy, że 1 to poniedziałek. W przypadku liczby z poza zakresu należy wyświetlić informację o błędzie.</p>
</header>
<section>
    <form action="" method="post">
        Podaj liczbę całkowitą: <input type="number" name="numer"><br>
        <button type="submit">Wyślij</button>
    </form>
</section>
<section>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numer = $_POST['numer'];

$dni = [
    1 => "Poniedziałek",
    2 => "Wtorek",
    3 => "Środa",
    4 => "Czwartek",
    5 => "Piątek",
    6 => "Sobota",
    7 => "Niedziela"
];

    if (isset($dni[$numer])) {
        echo "Podana liczba to: $numer<br>";
        echo "Nazwa dnia tygodnia: " . $dni[$numer];
    } else {
        echo "Błąd: liczba $numer nie jest z zakresu 1–7.";
    }
}

?>
</section>
</body>
</html>
