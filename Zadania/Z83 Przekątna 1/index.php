<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Z83</title>
</head>
<body>
<header>
<p>
    <h1>Zadanie Z83</h1>
    <h2>Autor: Seweryn Poczynek</h2>
<p>
    Napisz program, który dla podanej liczby całkowitej A oznaczającej ilość znaków w wierszu wyświetla następujący blok znaków.
</p>
</header>
<section>
    <form action="" method="post">
        Podaj A: <input type="text" name="a"><br>
        <button type="submit">Wyślij</button>
    </form>
</section>
<section>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$a = htmlspecialchars($_POST['a']);

echo "<b>A = $a</b><br><br>";


    for ($i = 0; $i < $a; $i++) {
        for ($j = 0; $j < $a; $j++) {
            if($j != $i) {
                echo "0";
            }
            else{
                echo "<b>1</b>";
            }
        }
        echo "<br>";
    }


}
?>
</section>
</body>
</html>
