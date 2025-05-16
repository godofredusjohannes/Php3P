<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Porównanie liczb</title>
</head>
<body>

<h2>Porównanie dwóch liczb</h2>

<?php

$a = 0;

$b = 0;

function porownajLiczby($a, $b) {
    if ($a < $b) {
        echo "<span style='color: green;'>$a</span> ";
        echo "<span style='color: red;'>$b</span>";
    } elseif ($a > $b) {
        echo "<span style='color: green;'>$b</span> ";
        echo "<span style='color: red;'>$a</span>";
    } else {
        echo "<span style='color: blue;'>$a</span> ";
        echo "<span style='color: blue;'>$b</span>";
    }
}

porownajLiczby(5, 8)."<br>";
porownajLiczby(10, 3)."<br>";
porownajLiczby(7, 7);
?>

</body>
</html>