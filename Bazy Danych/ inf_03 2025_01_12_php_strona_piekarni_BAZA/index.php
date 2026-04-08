<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Piekarnia</title>
</head>
<body>

<?php

$db = mysqli_connect("localhost", "root", "", "piekarnia");


$sql = "SELECT Rodzaj, Nazwa, Gramatura, Cena FROM wyroby WHERE Rodzaj = 'INNE';";

$query = mysqli_query($db, $sql);
echo "<table><tr><th>Rodzaj</th><th>Nazwa</th><th>Gramatura</th><th>Cena</th></tr>";
while ($el = mysqli_fetch_row($query)){
    echo "<tr><td>".$el[0]."</td><td>".$el[1]."</td><td>".$el[2]."</td><td>".$el[3]."</td></tr>";
}

echo "</table>";
mysqli_close($db);

?>

</body>
</html>