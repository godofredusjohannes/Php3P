<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filmoteka</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>

    <section id="blok1">
        <img src="img/klaps.png" alt="Nasze filmy">
    </section>
    
    <section id="blok2">
        <h1>BAZA FILMÓW</h1>
    </section>
    
    <section id="blok3">
        <form method="post">
            <select name="typ" id="typ">
                <option value="Sci-Fi">Sci-Fi</option>
                <option value="animacja">animacja</option>
                <option value="dramat">dramat</option>
                <option value="horror">horror</option>
                <option value="komedia">komedia</option>
            </select>
            <button type="submit">Filmy</button>
        </form>
    </section>
    
    <section id="blok4">
        <img src="img/gwiezdneWojny.jpg" alt="szturmowcy">
    </section>

    <section id="lewy">
        <h2>Wybrano filmy:</h2>
        <?php
        $db = mysqli_connect("localhost","root","","dane");

        if (isset($_POST['typ'])) {
            $typ = $_POST['typ'];

            $sql = "SELECT tytul, rok, ocena FROM filmy JOIN gatunki ON filmy.gatunki_id = gatunki.id WHERE gatunki.nazwa = '$typ';";

            $query = mysqli_query($db, $sql);

            while ($el = mysqli_fetch_row($query)) {
                echo "<p>Tytuł: ".$el[0].", Rok produkcji: ".$el[1].", Ocena: ".$el[2]."</p>";
            }

        }

        mysqli_close($db);
        ?>
    </section>
    
    <section id="prawy">
        <h2>Wszystkie filmy</h2>
        <?php
        $db = mysqli_connect("localhost","root","","dane");

        $sql = "SELECT filmy.id, tytul, imie, nazwisko FROM filmy JOIN rezyserzy ON filmy.rezyserzy_id = rezyserzy.id;";

        $query = mysqli_query($db, $sql);

        while ($el = mysqli_fetch_row($query)){
            echo "<p>".$el[0].". ".$el[1].", reżyseria: ".$el[2]." ".$el[3]."</p>";
        }

        mysqli_close($db);
        ?>
    </section>
    
    <section id="stopka">
        <p>Autor: Seweryn Poczynek 3P</p>
        <a href="kwerendy/kwerendy.txt">Zapytania do bazy</a>
        <a href="http://filmy.pl" target="_blank">Przejdz do filmy.pl</a>
    </section>

</body>
</html>