<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Z77</title>
</head>
<body>
<header>
<p>
    <h1>Zadanie Z77</h1>
    <h2>Autor: Seweryn Poczynek</h2>
<p>
    Napisz program, który dla podanych liczb całkowitych A i B wyświetla liczby od A do B, gdy A < B, lub od B do A, gdy B < A.
</p>
</header>
<section>
    <form action="" method="post">
        Podaj liczbe A: <input type="number" name="a"><br>
        Podaj liczbe B: <input type="number" name="b"><br>
        <button type="submit">Wyślij</button>
    </form>
</section>
<section>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$a = htmlspecialchars($_POST['a']);
$b = htmlspecialchars($_POST['b']);

echo "<b>A = $a</b><br><b>B = $b</b><br>";

$wynik = null;

if ($a < $b) {

    for ($i = $a; $i <= $b; $i++) {
        $wynik .= "$i;";
        if ($i % 10 == 0) {
            $wynik .= "<br>";
        }

    }
}

    if ($a > $b) {

        for ($i = $b; $i <= $a; $i++) {
            $wynik .= "$i;";
            if ($i % 10 == 0) {
                $wynik .= "<br>";
            }
        }

    }
echo $wynik;

}
?>
</section>
</body>
</html>
