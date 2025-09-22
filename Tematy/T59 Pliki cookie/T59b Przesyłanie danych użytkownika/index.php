<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>T59b</title>
</head>
<body>
<form name="mariusz" method="post" action="">

    <h2>Imie i nazwisko: </h2>
    <input type="text" name="imie"><br><br>
    <h2>Data urodzenia: </h2>
    <input type="date" name="data"><br><br><br>
    <input type="submit" value="Wyślij" name="wyslij">

</form>
<section>

<div class="wynik">
<?php

if (isset($_POST['wyslij'])) {
    $imie = $_POST['imie'];
    $data = $_POST['data'];

    setcookie("imie", $imie, time() + 3600, "/");
    setcookie("data", $data, time() + 3600, "/");

}

if (isset($_COOKIE['imie'])&&isset($_COOKIE['data'])) {
    echo "Witaj ".$_COOKIE['imie'];

    $urodziny = new DateTime($_COOKIE['data']);
    $dzis = new DateTime();

    $urodziny->setDate($dzis->format("Y"), $urodziny->format("m"), $urodziny->format("d"));

    if ($urodziny < $dzis) {
        $urodziny->modify("+1 year");
    }

    $roznica = $dzis->diff($urodziny)->days;
    if ($roznica == 0) {
        echo "<h1>Dzisiaj masz urodziny, wszystkiego najlepszego!</h1>";
    } else {
        echo "<h1>Twoje urodziny będą za $roznica dni.</h1>";
    }
}

?>
</div>
</section>

</body>
</html>