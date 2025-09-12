<?php
if (isset($_POST['komentarz'])) {
    $tekst = substr($_POST['komentarz'], 0, 255);
    $tekst = strip_tags($tekst) . "\n";

    if (!$op = fopen('opinie.txt', 'a')) {
        echo "Błąd!. Nie można otworzyć pliku opinie.txt";
    } else {
        if (fwrite($op, $tekst) === false) {
            echo "Dodanie komentarza nie powiodło się";
        }
    }
}
?>
<html>
<head>
    <title>T56</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>T56 Komentarze do pliku</h1>
<h2>Autor: Seweryn Poczynek</h2>
<div>
    <form action="" method="post">
        <p><b>Dodaj swój komentarz na temat globalnego ocieplenia</b><br><p>Utwórz skrypt, który będzie zapisywał opinie użytkowników w pliku tekstowym opinie.txt. Na stronie wyświetl formularz, który pozwoli na wpisanie opinii. Nowe opinie powinny być dopisywane do pliku i umieszczane na jego końcu. Dotychczasowe opinie zapisane w pliku tekstowym powinny zostać wyświetlone na stronie i powinny być dostępne dla innych jej użytkowników.</p><br><p>(Maksymalnie 255 znaków)</p>
        <textarea name="komentarz" rows="6" cols="50"
                  wrap="virtual"></textarea><br>
        <input type="submit" value="Wyślij">
</div>
</form>
<b>Dodane opinie:</b>
<div>
    <?php
    $opinie = '';
    if (file_exists('./opinie.txt')) {
        $opinie = file_get_contents('./opinie.txt');
        $opinie = nl2br($opinie);
    }
if ($opinie != '') {
    echo $opinie;
} else {
    echo "Brak opinii na temat zmian klimatu.";
}
?>
</div>
</body>
</html>