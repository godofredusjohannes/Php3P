<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Z78</title>
</head>
<body>
<header>
<p>
    <h1>Zadanie Z78</h1>
    <h2>Autor: Seweryn Poczynek</h2>
<p>
    Napisz program, który odczytuje dwie wartości będące dużymi literami alfabetu angielskiego i wypisuje litery od pierwszej do drugiej.
</p>
</header>
<section>
    <form action="" method="post">
        podaj pierwszy znak (A-Z): <input type="text" name="a"><br>
        podaj drugi znak (A-Z): <input type="text" name="b"><br>
        <button type="submit">Wyślij</button>
    </form>
</section>
<section>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$a = htmlspecialchars($_POST['a']);
$b = htmlspecialchars($_POST['b']);

echo "<b>Pierwszy znak: $a</b><br><b>Drugi znak: $b</b><br>";

$start = ord($a);
$end = ord($b);

$wynik = null;

    for ($i = $start; $i <= $end; $i++) {
        $wynik .= chr($i).";";
        if ($i % 10 == 0) {
            $wynik .= "<br>";
        }
    }

echo $wynik;

}
?>
</section>
</body>
</html>
