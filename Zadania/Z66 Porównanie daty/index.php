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
    <p>Napisz program, który dla dat o postaci dzien1, miesiac1, rok1 oraz dzien2, miesiac2, rok2 określi, która z nich jest wcześniejsza. Program powinien przyjmować dane z formularza, weryfikować ich poprawność (np. czy dzień i miesiąc tworzą istniejącą datę) i wyświetlać obie daty oraz wynik porównania w czytelny sposób.</p>
    <br>
    <p><b>Wskazówki dla ucznia:</b></p><br>
    <p><ul style="">
        <li>
            Sprawdź, czy wszystkie dane wejściowe są liczbami za pomocą is_numeric().
        </li>
        <li>Zweryfikuj warunki A<B i C<D, aby prostokąt był poprawnie zdefiniowany.
        </li>
        <li>
            Punkt leży wewnątrz prostokąta, jeśli x jest między A i B (A < x < B) oraz y jest między C i D (C < y < D).
        </li>
        <li>
            Punkt leży na krawędzi, jeśli x=A lub x=B albo y=C lub y=D (przy zachowaniu pozostałych warunków).
        </li>
        <li>
            Zabezpiecz dane wejściowe za pomocą htmlspecialchars(), aby uniknąć problemów z XSS.
        </li>
    </ul></p>
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

}

?>
</section>
</body>
</html>
