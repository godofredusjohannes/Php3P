<?php
$db = mysqli_connect("localhost", "root", "", "3p_2_baza1");
$q = "SELECT imie, nazwisko, stanowisko, dzial FROM `pracownicy` WHERE pracownicy.sekcja = 'drukarki'";

$result = mysqli_query($db, $q);

while ($el = mysqli_fetch_row($result)) {
    echo "<li>"."imie: ".$el[0]." ".$el[1]." ".$el[2]." ".$el[3]."</li>"."<br>";
}

mysqli_close($db);