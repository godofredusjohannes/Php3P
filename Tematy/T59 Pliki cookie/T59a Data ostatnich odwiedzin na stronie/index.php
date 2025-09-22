<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>T59a</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section>

<div class="wynik">
<?php

$czas = date("Y-m-d G:i:s");
setcookie("wizyta", $czas, time()+3600);

if (isset($_COOKIE['wizyta'])) {
    $ostatnia = $_COOKIE['wizyta'];
    echo "Witamy ponownie! <br> Ostatni raz odwiedziłeś nas " .$ostatnia;
}
else {
    echo "Witamy na naszej stronie!";
}

?>
</div>
</section>

</body>
</html>