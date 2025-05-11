<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>T51</title>
    <style>
    </style>
</head>
<body>
<?php
$panstwa = [
    "Polska" => "Warszawa",
    "Niemcy" => "Berlin",
    "Francja" => "Paryż",
    "Włochy" => "Rzym",
    "Hiszpania" => "Madryt"
];

echo "<table>";
echo "<tr><th>Państwo</th><th>Stolica</th></tr>";
foreach ($panstwa as $kraj => $stolica) {
    echo "<tr><td>$kraj</td><td>$stolica</td></tr>";
}
echo "</table>";
?>
</body>
</html>