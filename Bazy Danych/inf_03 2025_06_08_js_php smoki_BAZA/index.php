<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smoki</title>
</head>
<body>
<table>
    <tr>
        <th>Nazwa</th>
        <th>Długość</th>
        <th>Szerokość</th>
    </tr>
<?php
$db = mysqli_connect("localhost", "root", "", "smoki");

$sql = "SELECT nazwa, dlugosc, szerokosc FROM smok WHERE pochodzenie = 'Polska'";

$kwerenda = mysqli_query($db, $sql);


while ($el = mysqli_fetch_row($kwerenda)){
    echo  "<tr><td>".$el[0]."</td><td>".$el[1]."</td><td>".$el[2]."</td></tr>";
}


mysqli_close($db);
?>
</table>
</body>
</html>