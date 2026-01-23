<?php

$db = mysqli_connect("localhost", "root", "", "szkolenia");

$sql = "SELECT COUNT(kod_kursu) AS 'Zapisanych', nazwa FROM kursy JOIN kursy_uczestnicy ON kursy.kod = kursy_uczestnicy.kod_kursu GROUP BY nazwa;";

$kwerenda = mysqli_query($db, $sql);

while ($el = mysqli_fetch_row($kwerenda)) {
    echo "Nazwa: ".$el[1].", Zapisanych: ".$el[0]."<br>";
}

mysqli_close($db);