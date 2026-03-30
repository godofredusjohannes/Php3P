<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grzybobranie</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>

<section id="miniatury">
    <a href="img/borowik.jpg"><img src="img/borowik-miniatura.jpg" alt="Grzybobranie"></a>
</section>

<section id="tytulowy">
    <h1>Idziemy na grzyby!</h1>
</section>

<section id="lewy">
    <?php
    $db = mysqli_connect("localhost","root","","dane2");

    $sql1 = "SELECT nazwa_pliku, potoczna FROM grzyby;";

    $query1 = mysqli_query($db, $sql1);

    while ($el = mysqli_fetch_row($query1)) {
        echo "<img src='img/$el[0]' alt='' title='$el[1]'>";
    }

    ?>
</section>

<section id="prawy">
    <h2>Grzyby jadalne</h2>
    <?php

    $sql2 = "SELECT nazwa, potoczna FROM grzyby WHERE jadalny = 1;";

    $query2 = mysqli_query($db, $sql2);

    while ($el = mysqli_fetch_row($query2)) {
        echo "<p>".$el[0]." (".$el[1].")</p>";
    }

    ?>
    <h2>Polecamy do sosów</h2>
    <?php

    $sql3 = "SELECT grzyby.nazwa, potoczna, rodzina.nazwa FROM grzyby JOIN rodzina ON grzyby.rodzina_id = rodzina.id JOIN potrawy ON grzyby.potrawy_id = potrawy.id WHERE potrawy.nazwa = 'sos';";

    $query3 = mysqli_query($db, $sql3);

    while ($el = mysqli_fetch_row($query3)) {
        echo "<ol><li>".$el[0]." (".$el[1]."), rodzina: ".$el[2]."</li></ol>";
    }

    mysqli_close($db);
    ?>
</section>

<section id="stopka">
    <p>Autor: Seweryn Poczynek 3P</p>
</section>

</body>
</html>