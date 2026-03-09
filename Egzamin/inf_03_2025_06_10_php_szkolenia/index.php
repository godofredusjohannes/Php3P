<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Szkolenia i kursy</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

<section id="container">
    <header>
        <h1>SZKOLENIA</h1>
    </header>

    <section id="glowny">

    <section id="lewy">
        <table>
            <tr>
                <th>Nazwa</th>
                <th>Opis</th>
                <th>Cena</th>
            </tr>
            <?php

            $db = mysqli_connect("localhost","root","","szkolenia");

            $sql = "SELECT kod, nazwa, cena FROM kursy ORDER BY cena ASC;";

            $query = mysqli_query($db, $sql);

            while ($el = mysqli_fetch_row($query)) {
                echo "<tr><td><img src='img/$el[0].jpg' alt='kurs'></td><td>".$el[1]."</td><td>".$el[2]."</td></tr>";
            }
            ?>
        </table>
    </section>

    <section id="prawy">
        <h2>Zapisy na kursy</h2>
        <form method="post" >
            <label for="imie" id="imie">Imię</label><br>
            <input type="text" name="imie" id="imie" required><br>
            <label for="nazwisko" id="nazwisko">Nazwisko</label><br>
            <input type="text" name="nazwisko" id="nazwisko" required><br>
            <label for="wiek" id="wiek">Wiek</label><br>
            <input type="number" name="wiek" id="" required><br>
            <label for="rodzaj" id="rodzaj">Rodzaj kursu</label><br>
            <select name="rodzaj" id="rodzaj">
                <?php

                $sql2 = "SELECT nazwa FROM kursy;";

                $query2 = mysqli_query($db, $sql2);

                while ($el = mysqli_fetch_row($query2)) {
                    echo "<option value='".$el[0]."'>".$el[0]."</option>";
                }

                $imie = $_POST['imie'];
                $nazwisko = $_POST['nazwisko'];
                $wiek = $_POST['wiek'];
                $rodzaj = $_POST['rodzaj'];
                ?>
            </select><br>
            <button type="submit">Dodaj dane</button>
            <br>
            <?php

            $sql3 = "INSERT INTO uczestnicy (`imie`,`nazwisko`,`wiek`) VALUES ('$imie', '$nazwisko', $wiek);";


            if ($imie != null && $nazwisko != null && $wiek != null) {
                $query3 = mysqli_query($db, $sql3);
            }
            else{
                echo "Wprowadź wszystkie dane";
            }

            mysqli_close($db);
            ?>
        </form>
    </section>

    </section>

    <footer>
        <p>Stronę wykonał: Seweryn Poczynek 3P</p>
    </footer>
</section>
</body>
</html>
