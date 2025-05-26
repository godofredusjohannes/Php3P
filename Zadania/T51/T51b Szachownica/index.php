<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>T51b</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section>

<div class="rozwiazanie">
<?php

function szachownica($a)
{
    echo '<div class="szachownica" style="grid-template-columns: repeat('.$a.', 50px);">';
    for ($i = 0; $i < $a; $i++) {
        for ($j = 0; $j < $a; $j++) {
            $klasa = (($i + $j) % 2 === 0) ? 'niebieski' : 'zolty';
            echo '<div class="pole ' . $klasa . '"></div>';
        }
    }
    echo '</div>';
}

szachownica(6);
?>
</div>
</section>

</body>
</html>