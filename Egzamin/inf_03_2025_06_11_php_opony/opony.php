<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OPONY</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

<section id="glowny">

    <section id="boczny">

        <?php
        $database = mysqli_connect("localhost", "root", "", "opony");

        $sql = "SELECT * FROM opony ORDER BY cena ASC LIMIT 10;";

        $query = mysqli_query($database, $sql);

        while ($el = mysqli_fetch_row($query)) {

            if ($el[3] == "letnia"){
                echo "<div class='opona'><img src='img/lato.png' alt=''><h4>Opona: </h4>".$el[1]." ".$el[2]."<br><h3>Cena: ".$el[4]."</h3></div>";
            }
            if ($el[3] == "zimowa"){
                echo "<div class='opona'><img src='img/zima.png' alt=''><h4>Opona: </h4>".$el[1]." ".$el[2]."<br><h3>Cena: ".$el[4]."</h3></div>";
            }
            else{
                echo "<div class='opona'><img src='img/uniwer.png' alt=''><h4>Opona: </h4>".$el[1]." ".$el[2]."<br><h3>Cena: ".$el[4]."</h3></div>";
            }


        }

        ?>
        <p><a href="https://opona.pl/">więcej ofert</a></p>
    </section>

    <section id="prawy">

    <section id="sekcja1">
        <img src="img/opona.png" alt="Opona">
        <h2>Opona dnia</h2>

        <?php

        header("Refresh: 10");

        $sql2 = "SELECT producent, model, sezon, cena FROM opony WHERE nr_kat = 9;";

        $query2 = mysqli_query($database, $sql2);

        while ($el = mysqli_fetch_row($query2)) {
            echo "<h2>".$el[0]." model ".$el[1]."</h2> <h2>Sezon: ".$el[2]."</h2> <h2>Tylko ".$el[3]."zł</h2>";
        }

        ?>

    </section>

    <section id="sekcja2">

        <h2>Najnowsze zamówienie</h2>

        <?php

        $sql3 = "SELECT id_zam, ilosc, model, cena FROM zamowienie JOIN opony ON zamowienie.nr_kat = opony.nr_kat ORDER BY RAND() LIMIT 1;";

        $query3 = mysqli_query($database, $sql3);

        while ($el = mysqli_fetch_row($query3)){
            echo "<h2>".$el[0]." ".$el[1]." sztuki modelu ".$el[2]."</h2> <h2>Wartość zamówienia ".$el[1] * $el[3]." zł";
        }

        mysqli_close($database);
        ?>

    </section>

    </section>


</section>

<footer>
    <p>Stronę wykonał: Seweryn Poczynek 3P</p>
</footer>

</body>
</html>
