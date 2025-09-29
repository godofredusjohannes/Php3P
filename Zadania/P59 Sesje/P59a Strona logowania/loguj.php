<?php
session_start();
if(isset($_SESSION['log'])){
    header('location: strona.php');
    exit();
}
else if (isset($_POST['nazwa']) && isset($_POST['haslo'])) {
    if ($_POST['nazwa'] =='Seweryn' && $_POST['haslo'] =='Seweryn123') {
        $_SESSION['log'] = $_POST['nazwa'];
        header('location: strona.php');
        exit();
    } else {
        echo"Nieprawidłowedane logowanie<br>";
    }
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Autoryzacja danych</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie P59a</h1><br>
    <h2>Autor: Seweryn Poczynek</h2>
</header>
<section>
    <h3>Aby sie zalogowac należy użyć <br>Loginu: Seweryn<br>oraz Hasła: Seweryn123</h3>
</section>
<section>
    <form action="loguj.php" method="post">
        <p id="log">Logowanie</p>
        <p class="fo">Nazwa użytkownika:</p>
        <input type="text" name="nazwa" value="" size="25"><br>
        <p class="fo">Hasło:</p>
        <input type="password" name="haslo" value="" size="25"><br>
        <input type="submit" value="Zaloguj się">
    </form>
</section>
</body>
</html>