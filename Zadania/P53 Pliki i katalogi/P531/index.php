<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>P531</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<section>

<div class="wynik">
<?php

touch("Seweryn_Poczynek");
touch('doSkasowania.txt');
unlink('doSkasowania.txt');
$folder1 = "Poczynek";

mkdir($folder1, 0777, true);

touch($folder1."/Seweryn_Poczynek");

?>
</div>
</section>

</body>
</html>