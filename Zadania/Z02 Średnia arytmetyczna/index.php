<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z02</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $liczba1 = $_POST["liczba1"];
    $liczba2 = $_POST["liczba2"];

    $srednia = ($liczba1 + $liczba2) / 2;
    echo "<h2>Średnia arytmetyczna liczb $liczba1 i $liczba2 wynosi: $srednia</h2>";
}
?>

<form method="post" action="">
    <label for="liczba1">Liczba 1:</label>
    <input type="text" name="liczba1" id="liczba1" required><br><br>

    <label for="liczba2">Liczba 2:</label>
    <input type="text" name="liczba2" id="liczba2" required><br><br>

    <input type="submit" value="Oblicz średnią">
</form>

</body>
</html>
