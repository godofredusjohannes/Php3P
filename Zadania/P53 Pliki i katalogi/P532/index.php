<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>P532</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section>

<div class="wynik">
<?php

touch("narodoweCzytanie.txt");

$tekst = <<<TXT
W TYM ROKU NARODOWE CZYTANIE POD HONOROWYM PATRONATEM PARY PREZYDENCKIEJ ODBĘDZIE SIĘ 08.09.2018 R. W STULECIE ODZYSKANIA NIEPODLEGŁOŚCI WYBRANO POWIEŚĆ STEFANA ŻEROMSKIEGO „PRZEDWIOŚNIE”. 
WŁĄCZAJĄC SIĘ DO OGÓLNOPOLSKIEJ AKCJI, ZAPRASZAMY DO WSPÓLNEGO CZYTANIA W NASZEJ SZKOLE W PRZEDDZIEŃ TEGO WYDARZENIA 07.09.2018 R. 
NA DRUGIEJ GODZINIE LEKCYJNEJ W AULI SZKOLNEJ. CZYTAĆ BĘDĄ UCZNIOWIE KLASY 2M.
FORMUŁA SPOTKANIA NIE JEST ZAMKNIĘTA – KAŻDY MOŻE PRZYŁĄCZYĆ SIĘ DO CZYTANIA LUB SŁUCHANIA.
TXT;

file_put_contents("narodoweCzytanie.txt", $tekst);
function pokazTekst($plik){
    if(file_exists($plik)){
        $dane = file_get_contents($plik);
        echo nl2br($dane);
    }
    else{
        echo ("Ten plik nie istnieje");
    }
}

pokazTekst("narodoweCzytanie.txt");

?>
</div>
</section>

</body>
</html>