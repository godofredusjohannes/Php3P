<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>T51a</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section>

<div class="rozwiazanie">
<?php

function liczbaodkryta(int $liczba){

    if ($liczba <= 0) {
        return false;
    }
    $cyfry = str_split((string)$liczba);

    foreach ($cyfry as $cyfra) {
        $cyfraInt = (int)$cyfra;
        if ($cyfraInt === 0) {
            continue;
        }
        if ($liczba % $cyfraInt !== 0) {
            return false;
        }
    }

    return true;

}


echo liczbaodkryta(24);
echo liczbaodkryta(26);

?>
</div>
</section>

</body>
</html>