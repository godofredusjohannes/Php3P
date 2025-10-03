<?php

$db = mysqli_connect("localhost", "root", "", "3p_2_baza1");
$q = "SELECT imie, nazwisko, dzial FROM `pracownicy` WHERE pracownicy.dzial = 'reklama' OR pracownicy.dzial = 'marketing'";

$result = mysqli_query($db, $q);

while ($el = mysqli_fetch_row($result)) {
    echo "Imie: ".$el[0]." ".$el[1].", Dział: ".$el[2]."<br>";
}

mysqli_close($db);