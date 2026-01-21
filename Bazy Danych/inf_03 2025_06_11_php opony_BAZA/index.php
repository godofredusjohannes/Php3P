<?php
$db = mysqli_connect("localhost", "root", "", "opony");

$sql = "SELECT id_zam, ilosc, model, cena FROM zamowienie JOIN opony ON zamowienie.nr_kat = opony.nr_kat ORDER BY RAND() LIMIT 1;";

$kwerenda = mysqli_query($db, $sql);

while ($el = mysqli_fetch_row($kwerenda)) {
    echo "id_zam: ".$el[0]." ilosc: ".$el[1]." model: ".$el[2]." cena: ".$el[3]."<br>";
}

mysqli_close($db);
?>