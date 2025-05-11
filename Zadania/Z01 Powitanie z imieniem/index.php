<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Z01</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["imie"])) {
    $imie = htmlspecialchars($_POST["imie"]);
    echo "<h2>Witaj $imie na mojej stronie!</h2>";
} else {
    echo '
        <form method="post" action="">
            <label for="imie">Podaj swoje imię:</label><br>
            <input type="text" id="imie" name="imie" required>
            <br><br>
            <input type="submit" value="Wyślij">
        </form>
    ';
}
?>

</body>
</html>