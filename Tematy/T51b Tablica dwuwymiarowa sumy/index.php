<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>T51b</title>
</head>
<body>

<?php
$rows = 5;
$cols = 3;
$tablica = [];

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {
        $tablica[$i][$j] = rand(10, 99);
    }
}

echo "<table>";
for ($i = 0; $i < $rows; $i++) {
    echo "<tr>";
    for ($j = 0; $j < $cols; $j++) {
        echo "<td>" . $tablica[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<h3>Sumy wierszy:</h3>";
echo "<ul>";
for ($i = 0; $i < $rows; $i++) {
    $suma = array_sum($tablica[$i]);
    echo "<li>S" . ($i + 1) . " = $suma</li>";
}
echo "</ul>";

$sumaMax = 0;
for ($j = 0; $j < $cols; $j++) {
    $maks = $tablica[0][$j];
    for ($i = 1; $i < $rows; $i++) {
        if ($tablica[$i][$j] > $maks) {
            $maks = $tablica[$i][$j];
        }
    }
    $sumaMax += $maks;
}

echo "<h3>Suma maksymalnych wartości z kolumn:</h3>";
echo "<p><strong>SumaMax = $sumaMax</strong></p>";
?>
</body>
</html>