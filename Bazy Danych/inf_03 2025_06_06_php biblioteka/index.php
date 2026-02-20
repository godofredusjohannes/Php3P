<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <th>Tytuł</th>
        <th>Id czytelnika</th>
        <th>Data Oddania</th>
    </tr>
<?php

$db = mysqli_connect("localhost","root","","biblioteka");

$sql = "SELECT tytul, id_cz, data_odd FROM ksiazka JOIN wypozyczenia ON ksiazka.id = wypozyczenia.id_ks ORDER BY wypozyczenia.data_odd ASC LIMIT 15;";

$query = mysqli_query($db, $sql);

while ($el = mysqli_fetch_row($query)) {
    echo "<tr><td>".$el[0]."</td><td>".$el[1]."</td><td>".$el[2]."</td></tr>";
}

mysqli_close($db);

?>
</table>
</body>
</html>