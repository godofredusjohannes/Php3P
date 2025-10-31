<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Z74</title>
</head>
<body>
<header>
<p>
    <h1>Zadanie Z74</h1>
    <h2>Autor: Seweryn Poczynek</h2>
<p>
    Napisz program, który dla danej liczby całkowitej N wyświetla ciąg liczb w postaci ułamka zwykłego i dziesiętnego, prezentując wynik w specyficzny sposób. Na przykład dla N=3 program powinien wyświetlić:<br>
    Piętro 1 > 1/1 - 1.000000<br>
    Piętro 2 > > 1/2 - 0.500000<br>
    Piętro 3 > > > 1/3 - 0.333333<br>
    > > > > Koniec wspinaczki wracamy < < < <<br>
    Piętro 3 > > ><br>
    Piętro 2 > ><br>
    Piętro 1 ><br>
    Program powinien przyjmować N z formularza i weryfikować, czy jest to liczba całkowita dodatnia.<br>
</p>
    <br>
    <p><b>Wskazówki dla ucznia:</b></p><br>
    <ul style="">
        <li>Sprawdź, czy N jest liczbą całkowitą dodatnią za pomocą is_numeric() i warunku N > 0.
        </li>
        <li>Użyj pętli for, aby wygenerować ułamki od 1/1 do 1/N.
        </li>
        <li>Oblicz ułamek dziesiętny za pomocą dzielenia (np. 1 / $i) i sformatuj go funkcją sprintf() do 6 miejsc po przecinku.
        </li>
        <li>Dodawaj znaki > zależnie od numeru piętra (np. w pętli zwiększaj ich liczbę), a potem odwracaj kolejność dla powrotu.
        </li>
        <li>Zabezpiecz dane wejściowe za pomocą htmlspecialchars(), aby uniknąć problemów z XSS.
        </li>
    </ul>
</header>
<section>
    <form action="" method="post">
        Liczba pięter: <br>
        N: <input type="number" name="numer"><br>
        <button type="submit">Wyślij</button>
    </form>
</section>
<section>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$n = htmlspecialchars($_POST['numer']);

if ($n >= 0) {
    for ($i = 1; $i <= $n; $i++) {
        $dziesietny = round($i / $n, 6);
        echo "Piętro $i > 1/$n - $dziesietny";
        for ($j = 1; $j <= $i; $j++) {
            echo " >";
        }
        echo "<br><br>";
    }
    echo "> > > > > Koniec wspinaczki wracamy < < < < <<br><br>";
    for ($i = $n; $i >= 1; $i--) {
        echo "Piętro $i";
        for ($j = 1; $j <= $i; $j++) {
            echo " >";
        }
        echo "<br><br>";
    }
}
else {
    echo "Liczba $n nie jest dodatnia.";
}

}

?>
</section>
</body>
</html>
