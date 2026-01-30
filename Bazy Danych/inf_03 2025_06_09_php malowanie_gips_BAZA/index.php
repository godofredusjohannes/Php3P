<?php

$db = mysqli_connect("localhost", "root", "", "remonty");

$sql = 'SELECT imie, cena FROM klienci JOIN zlecenia ON klienci.id_klienta = zlecenia.id_klienta WHERE klienci.miasto = "Poznań" AND zlecenia.rodzaj = "malowanie";';

$kwerenda = mysqli_query($db, $sql);

while ($el = mysqli_fetch_row($kwerenda)) {
    echo "Imie: ".$el[0]." Cena: ".$el[1]."<br>";
}
