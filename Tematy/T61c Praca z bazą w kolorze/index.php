<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>T61c</title>
</head>
<link rel="stylesheet" href="style.css">
<header>
    <h1>T61c Praca z bazą w kolorze</h1>
    <h2>Autor: Seweryn Poczynek</h2>
    <p><b>
    Korzystając ze strony https://mockaroo.com/ wygeneruj w SQL następujące dane 50 pracowników: <br><br>

id <br>
first_name <br>
last_name <br>
email <br>
gender <br>
ip_address <br>
color <br>
Wartość color powinna być wyrażona w liczbie szesnastkowej.
<br><br>
Utwórz bazę danych 3p_02_pracownicy_w_kolorze. <br>
Zaimportuj dane z wygenerowanego pliku. <br>
Napisz skrypt php, który wyświetli dane pracowników na tle koloru zapisanego w kolumnie color. <br>
Jako rozwiązanie prześlij: wygenerowany plik sql, eksport bazy danych oraz skrypt php realizujący zadanie.
        </b>
</header>
<section>
<?php
$db =  mysqli_connect("localhost", "root", "", "3p_02_pracownicy_w_kolorze");

$q = "SELECT * FROM `mock_data`";

$result = mysqli_query($db, $q);
echo "<table>";
echo "<tr><th>ID</th><th>Imię</th><th>Nazwisko</th><th>Email</th><th>Płeć</th><th>Adres ip</th></tr>";

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        $color = htmlspecialchars($row['color']);

        echo "<tr style='background-color: {$color};'>
                <td>{$row['id']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['gender']}</td>
                <td>{$row['ip_address']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='6'>Brak danych</td></tr>";
}

echo "</table>";

mysqli_close($db);
?>
</section>
</html>