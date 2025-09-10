<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>T551</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section>

<div class="wynik">
<?php

$tablica1 = [1,6,3,8,4,5,3,5];
$tablica2 = [6,8,8,2,4,0,9,7];

function sortowanie(array $tablica1,array $tablica2) : array{

    $polaczona = array_merge($tablica1,$tablica2);

    sort($polaczona);

    return $polaczona;

}

$wynik = sortowanie($tablica1,$tablica2);

print_r($wynik);

?>
</div>
</section>

</body>
</html>