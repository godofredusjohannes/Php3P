<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Z31</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section>

<h3>Napisz program, który: dla współrzędnych wierzchołka trójkąta (x1,y1), (x2,y2),(x3,y3), oblicza jego pole powierzchni</h3>
    <img src="obrazek.png" alt=""><br><br>
<form method="post" action="">
    <label for="x1">podaj x<sub>1</sub>:</label>
    <input type="text" name="x1" id="x1"><br>

    <label for="y1">podaj y<sub>1</sub>:</label>
    <input type="text" name="y1" id="y1"><br>

    <label for="x2">podaj x<sub>2</sub>:</label>
    <input type="text" name="x2" id="x2"><br>

    <label for="y2">podaj y<sub>2</sub>:</label>
    <input type="text" name="y2" id="y2"><br>

    <label for="x3">podaj x<sub>3</sub>:</label>
    <input type="text" name="x3" id="x3"><br>

    <label for="y3">podaj y<sub>3</sub>:</label>
    <input type="text" name="y3" id="y3"><br>

    <input type="submit" value="Oblicz" id="button">
</form>

<div class="wynik">
<?php
if ($_SERVER ["REQUEST_METHOD"] == "POST") {

    $x1 = $_POST["x1"];
    $y1 = $_POST["y1"];

    $x2 = $_POST["x2"];
    $y2 = $_POST["y2"];

    $x3 = $_POST["x3"];
    $y3 = $_POST["y3"];

    $wynik = 0.5 * ($x1 * $y2 - $x2 * $y1) + ($x2 * $y3 - $x3 * $y2) + ($x3 * $y1 - $x1 * $y3);

    if ($wynik < 0){
        $wynik = $wynik * -1;
        echo "<h3>Pole trójkąta ABC o wierzchołkach:<br> A($x1, $y1)<br>B($x2, $y2)<br>C($x3, $y3)<br>wynosi: $wynik</h3>";
    }
    else{
        echo "<h3>Pole trójkąta ABC o wierzchołkach:<br> A($x1, $y1)<br>B($x2, $y2)<br>C($x3, $y3)<br>wynosi: $wynik</h3>";
    }
}
?>
</div>
</section>

</body>
</html>