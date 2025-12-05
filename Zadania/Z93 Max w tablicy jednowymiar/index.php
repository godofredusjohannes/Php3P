<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Z93</title>
</head>
<body>
<header>
<p>
    <h1>Zadanie Z93</h1>
    <h2>Autor: Seweryn Poczynek</h2>
<p>
    Napisz program, który wczytuje liczby całkowite do jednowymiarowej tablicy, wyświetla tę tablicę i wyświetla maksymalną wartość zapisaną w tablicy. Użytkownik wprowadza liczby do komponentu textarea oddzielone przecinkami. Program powinien zweryfikować, czy podane wartości są liczbami całkowitymi, a w odpowiedzi podać liczbę elementów w tablicy oraz maksymalną wartość.
    <br><br>
    <b>Wskazówki dla ucznia:</b>
    <ul>
        <li>
        Użyj explode(), aby rozdzielić ciąg z textarea na tablicę liczb na podstawie przecinków.</li>
        <li>Zweryfikuj, czy każda wartość jest liczbą całkowitą za pomocą is_numeric() i sprawdzenia, czy po konwersji na int nie traci wartości dziesiętnej.</li>
        <li>Użyj funkcji max(), aby znaleźć maksymalną wartość w tablicy.</li>
        <li>Liczbę elementów uzyskaj za pomocą count().</li>
        <li>Zabezpiecz dane wejściowe za pomocą htmlspecialchars() przy pobieraniu, aby chronić przed XSS.</li>
    </ul>
</p>
</header>
<section>
    <form action="" method="post">
        Wartosci tablicy (liczby całkowite oddzielone przecinkami): <br><textarea type="text" name="a" cols="40" rows="5" placeholder="np. 1, 2, 3, 4"></textarea><br>
        <button type="submit">Wyślij</button>
    </form>
</section>
<section>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $input = htmlspecialchars($_POST['a']);
        $a = explode(",", $input);

        $a = array_map('trim', $a);

        for ($i = 0; $i < count($a); $i++) {
        if (is_numeric($a[$i])) {
            echo "Wprowadzone wartości: ";
            $wielkosc_tab = count($a);

            for ($i = 0; $i < $wielkosc_tab; $i++) {
                if ($i != $wielkosc_tab - 1) {
                    echo $a[$i] . ", ";
                } else {
                    echo $a[$i];
                }
            }

            echo "<br> Tablica jednowymiarowa ($wielkosc_tab) elementów: <br>";
            for ($i = 0; $i < $wielkosc_tab; $i++) {
                if ($i != $wielkosc_tab - 1) {
                    echo $a[$i] . ", ";
                } else {
                    echo $a[$i];
                }
            }
            echo "<br>Liczba elementów: $wielkosc_tab";
            echo "<br>Maksymalna wartość: ".max($a);
        }
        else{
        echo "$a[$i] nie jest liczba całkowitą.";
        }
        }
        }



    ?>
</section>
</body>
</html>
