<?php
$do_bazy = mysqli_connect('localhost', 'root', '', '3p2_biblioteka');
if (!$do_bazy) {
    exit("Błąd połączenia z serwerem MySQL.");
}
$imie = $_POST['im'];
$nazwisko = $_POST['nazw'];
$dodaj = "INSERT INTO autorzy VALUES (id, '$imie', '$nazwisko')";
$zapytanie = mysqli_query($do_bazy, $dodaj);
if (!$zapytanie === true) {
    echo "Nowy autor nie został dodany do bazy!";
} else {
    echo "Autor " . $nazwisko . " " . $imie . " został dodany do bazy.";
}
mysqli_close($do_bazy);
?>