<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>P533</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section>

<div class="wynik">
<?php

touch("imiona.txt");

$tekst = <<<TXT
Jan
Kajetan
Maciej
Godofredus
Robert
Bogusława
Norbert
TXT;

file_put_contents("imiona.txt", $tekst);

$imiona = file("imiona.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

if ($imiona) {
    echo "<h3>Imiona w kolejności zapisania:</h3>";
    foreach ($imiona as $imie) {
        echo $imie . "<br>";
    }

    echo "<h3>Imiona w kolejności odwrotnej:</h3>";
    foreach (array_reverse($imiona) as $imie) {
        echo $imie . "<br>";
    }
} else {
    echo "Nie udało się odczytać pliku.";
}
?>
</div>
</section>

</body>
</html>