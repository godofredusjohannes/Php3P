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

function zwrot($liczby)
{
    if(count($liczby) < 2){
        return "Tablica musi zawierać co najmniej dwa elementy.";
    }

    sort($liczby);

    return $liczby[0] + $liczby[1];
}

$liczby = [5, 2, 7, 3, 6, 9, 3, 5];


    echo zwrot($liczby);

?>
</div>
</section>

</body>
</html>