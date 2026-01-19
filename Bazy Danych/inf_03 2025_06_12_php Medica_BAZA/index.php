<?php

$db = mysqli_connect("localhost", "root", "", "medica");

$sql = "SELECT nazwa, cecha FROM abonamenty JOIN szczegolyabonamentu ON abonamenty.id = Abonamenty_id JOIN cechy ON cechy.id = Cechy_id WHERE abonamenty.id = 1;";

$kwerenda = mysqli_query($db, $sql);

while ($el = mysqli_fetch_row($kwerenda)) {
    echo "Nazwa: ".$el[0].", Cecha: ".$el[1]."<br>";
}

?>