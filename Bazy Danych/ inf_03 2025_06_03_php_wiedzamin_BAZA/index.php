<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wiedzamin</title>
</head>
<body>
<table>
    <th>Autor</th>
    <th>Tytuł</th>
    <th>Kod</th>
<?php

$db = mysqli_connect("localhost", "root", "", "biblioteka");

$sql = "SELECT autor, tytul, kod FROM ksiazki ORDER BY Rand() LIMIT 5;";

$query = mysqli_query($db, $sql);

while ($el = mysqli_fetch_row($query)){

    echo "<tr><td>".$el[0]."</td><td>".$el[1]."</td><td>".$el[2]."</td></tr>";

}

?>
</table>
</body>
</html>