<?php
$db = mysqli_connect("localhost", "root", "", "3p_2_baza1");
$q = "SELECT imie, nazwisko, wynagrodzenie FROM `pracownicy` WHERE pracownicy.wynagrodzenie > 90000";

$result = mysqli_query($db, $q);

while ($el = mysqli_fetch_row($result)) {
    echo "Imie: ".$el[0]." ".$el[1].", Wynagrodzenie: ".$el[2]."<br>";
}

mysqli_close($db);