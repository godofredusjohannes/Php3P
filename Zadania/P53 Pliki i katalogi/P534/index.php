<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>P534</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section>

<div class="wynik">
<?php
$filename = "napisy.txt";

if (file_exists($filename)) {
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $index => $binary) {
        $decimal = bindec($binary); // konwersja binarnej na dziesiętną
        echo ($index + 1) . " – " . $binary . " – " . $decimal . PHP_EOL;
    }
} else {
    echo "Nie znaleziono pliku '$filename'." . PHP_EOL;
}

?>
</div>
</section>

</body>
</html>