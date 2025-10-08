<?php

$db = mysqli_connect("localhost", "root", "", "3p_2_baza_pracownikow");

if (!$db) {
    echo "Błądpołączeniaz serwerem MySQL.<br>";
}

if (isset($_POST['stworz'])) {
$sql = "CREATE TABLE IF NOT EXISTS pracownicy (
                id INT AUTO_INCREMENT PRIMARY KEY,
                imie VARCHAR(50),
                nazwisko VARCHAR(50),
                stanowisko VARCHAR(100),
                pensja DECIMAL(10,2)
            )";
mysqli_query($db, $sql);
echo "<p>Utworzono tabele lub juz istniala.</p><br>";
}

if (isset($_POST['zaladuj'])) {
    if (file_exists("pracownicy.txt")) {
        $op = fopen("pracownicy.txt", "r");
        while (($line = fgets($op)) !== false) {
            $dane = explode(";", trim($line));
            if (count($dane) == 4) {
                list($id, $imie, $nazwisko, $stanowisko_pensja) = $dane;
                $stmt = $db->prepare("INSERT INTO pracownicy (imie, nazwisko, stanowisko, pensja) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("sssd", $dane[0], $dane[1], $dane[2], $dane[3]);
                $stmt->execute();
            }
        }
        fclose($op);
        echo "<p>Dane zostały wczytane z pliku.</p>";
    }
    else{
        echo "Plik nie istnieje.";
    }
}

if (isset($_POST[''])) {
}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>T60a</title>
</head>
<link rel="stylesheet" href="style.css">
<header>
    <h1>T60a Praca z bazą danych</h1>
    <h2>Autor: Seweryn Poczynek</h2>
    <p><b>
            Tym razem zadanie jest bardziej złożone. Oto co należy zrobić: <br><br>

        - Utwórz bazę danych o nazwie 3p_2_baza_pracownikow.<br>
        - Do zadania dołączony został plik zawierający dane 114 pracowników - dokonaj konwersji tych danych do formaty txt (uzyskaj plik z danymi pracownicy.txt.<br>
        - Na utworzonej stronie projektu znajduje się przycisk "Utwórz tabelę", który w bazie 3p_2_baza_pracownikow tworzy tabelę pracownicy.<br>
        - Drugi przycisk "Załaduj dane" dodaje dane z pliku tekstowego pracownicy.txt do tabeli pracownicy.<br>
        - Trzeci przycisk wyświetla dane z tabeli pracownicy w postaci tabelarycznej.</p>
    </b>
</header>
<section>
<h2>Baza danych pracowników</h2>
<form method="POST">
    <button name="stworz">Utwórz tabelę</button>
    <button name="zaladuj">Załaduj dane</button>
    <button name="wyswietl">Wyświetl dane</button>
</form>
</section>
</html>