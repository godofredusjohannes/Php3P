<?php
session_start();
if(!isset($_SESSION['log'])) {
    header('location: loguj.php');
    exit;
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Stronagłówna</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section>
<?php
$imie = ucfirst($_SESSION['log']);
 echo "Witaj ". $imie;
 ?>
<p>Jesteśnastronie głównej.</p>
<p>Przedopuszczeniem strony wylogujsię!</p>
<a href="wyloguj.php">Wyloguj</a>

</section>
</body>
</html>