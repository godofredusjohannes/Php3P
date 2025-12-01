<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Z76</title>
</head>
<body>
<header>
<p>
    <h1>Zadanie Z76</h1>
    <h2>Autor: Seweryn Poczynek</h2>
<p>
    Napisz program, który dla podanych liczb całkowitych A i B wyświetla wszystkie liczby całkowite z przedziału od A do B oddzielone średnikami.
</p>
</header>
<section>
    <form action="" method="post">
        A: <input type="number" name="a"><br>
        B: <input type="number" name="b"><br>
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

for ($i = $a; $i <= $b; $i++) {
    $wynik .= "$i;";
    if ($i % 10 == 0){
        $wynik .= "<br>";
    }
}

echo $wynik;

}
?>
</section>
</body>
</html>
