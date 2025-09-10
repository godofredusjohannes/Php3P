<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>T51c</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section>

<div class="rozwiazanie">
    <?php
    function przetworzTablice(array &$tab, int $m) {
        echo "<h3>Oryginalna tablica:</h3>";
        echo "<table><tr>";
        foreach ($tab as $el) {
            echo "<td>$el</td>";
        }
        echo "</tr></table>";

        foreach ($tab as $i => $el) {
            $tab[$i] = $el * $m;
            if ($tab[$i] == 0) {
                $tab[$i] = 1;
            }
        }

        echo "<h3>Przetworzona tablica:</h3>";
        echo "<table><tr>";
        foreach ($tab as $el) {
            echo "<td>$el</td>";
        }
        echo "</tr></table>";
    }

    $tablica = [0, 2, 5, -3, 0, 4];
    $m = 3;

    przetworzTablice($tablica, $m);
    ?>
</div>
</section>

</body>
</html>