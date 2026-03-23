<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hurtownia komputerowa</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
<section id="kontener">
    <section id="lista">
        <ul>
            <li>
                Producenci
                <ol>
            <li>Intel</li>
            <li>AMD</li>
            <li>Motorola</li>
            <li>Corsair</li>
            <li>ADATA</li>
            <li>WD</li>
            <li>Kingstone</li>
            <li>Patriot</li>
            <li>Asus</li>
                </ol>
            </li>
        </ul>
    </section>
    <section id="formularz">
        <h1>Dystrybucja sprzętu komputerowego</h1>
        <form method="post">
            <label for="producent">Wybierz producenta</label><br>
            <input type="number" name="producent" >
            <button type="submit">WYŚWIETL</button>
        </form>
    </section>
    <section id="logo">
        <img src="sprzet.png" alt="Sprzedajemy komputery">
    </section>
    <section id="glowny">
        <h2>Podzespoły wybranego producenta</h2>
        <?php
        $db = mysqli_connect("localhost", "root", "", "sklep");

        if (isset($_POST['producent'])) {
            $producent = $_POST['producent'];

            switch ($producent) {
                case 1: $producent = "Intel"; break;
                case 2: $producent = "AMD"; break;
                case 3: $producent = "Motorola"; break;
                case 4: $producent = "Corsair"; break;
                case 5: $producent = "ADATA"; break;
                case 6: $producent = "WD"; break;
                case 7: $producent = "Kingstone"; break;
                case 8: $producent = "Patriot"; break;
                case 9: $producent = "Asus"; break;
                default: echo "Nie wybrano producenta"; break;
            }

            $sql = "SELECT podzespoly.nazwa, dostepnosc, cena FROM podzespoly JOIN producenci ON podzespoly.producenci_id = producenci.id WHERE producenci.nazwa = '$producent';";

            $query = mysqli_query($db, $sql);

            while ($el = mysqli_fetch_row($query)) {
                if($el[1] = 0){
                    $el[1] = "NIEDOSTĘPNY";
                }
                else{
                    $el[1] = "DOSTĘPNY";
                }
                echo "<p>".$el[0]." CENA: ".$el[2]." ".$el[1]."</p>";
            }

        }
        else{
            echo "Wybierz producenta";
        }
        mysqli_close($db);
        ?>
    </section>
    <footer>
        <h4>Zapraszamy od poniedziałku do soboty w godzinach 7<sup>30</sup>-16<sup>30</sup></h4>
        <p>Strony partnerów: </p>
        <a href="http://adata.pl/" target="_blank">ADATA</a>
        <a href="http://patriot.pl/" target="_blank">Patriot</a>
        <a href="mailto:biuro@hurt.pl">Napisz</a>
        <p>Stronę wykonał: Seweryn Poczynek 3P</p>
    </footer>
</section>
</body>
</html>
