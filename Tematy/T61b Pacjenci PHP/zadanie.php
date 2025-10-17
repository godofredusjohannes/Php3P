<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>T61b</title>
</head>
<link rel="stylesheet" href="style.css">
<header>
    <h1>T61b Pacjenci PHP</h1>
    <h2>Autor: Seweryn Poczynek</h2>
    <p><b>
Tym razem zadanie jest bardziej złożone. Oto co należy zrobić: <br><br>

            1. Utwórz bazę danych o nazwie 3p_2_pacjenci.<br><br>

            2. W bazie danych utwórz tabelę tabela_1 zawierającą kolumny:<br><br>

            identyfikator,<br>
            imię,<br>
            nazwisko,<br>
            email.<br><br>

            3. Utwórz plik tekstowy o nazwie dane.txt zawierający dane 3 pacjentów.<br><br>

            4. Napisz skrypt php, który czyta dane z pliku i zapisuje je do tabeli tabela_1 i wyświetla je na stronie zadanie.php w postaci tabeli.<br><br>


            Rozwiązanie powinno zawierać: eksport bazy, plik z danymi oraz skrypt php.
        </b>
</header>
<section>
    <?php
    $db = mysqli_connect("localhost", "root", "", "3p_2_pacjenci");

    $plik = fopen("dane.txt", "r");

    if ($plik) {
        while (($linia = fgets($plik)) !== false) {

            list($id, $imie, $nazwisko, $email) = explode(",", trim($linia));

            $check_sql = "SELECT * FROM tabela_1 WHERE id = '$id' OR email = '$email'";
            $check_result = $db->query($check_sql);

            if ($check_result->num_rows == 0) {
                $sql = "INSERT INTO tabela_1 (id, imie, nazwisko, email)
                    VALUES ('$id', '$imie', '$nazwisko', '$email')";
                $db->query($sql);
            }
        }
        fclose($plik);
    }

    $sql = "SELECT * FROM tabela_1";
    $result = $db->query($sql);

    echo "<h2>Lista pacjentów</h2>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Imię</th><th>Nazwisko</th><th>Email</th></tr>";

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['imie']}</td>
                <td>{$row['nazwisko']}</td>
                <td>{$row['email']}</td>
              </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>Brak danych</td></tr>";
    }

    echo "</table>";

    $db->close();
    ?>
</section>
</html>