<?php require("check.php"); ?>
<?php

$email = $_POST['email'];
$tytul = $_POST['tytul'];
$cena = $_POST['cena'];

$connect = mysql_connect("10.254.94.2", "s173330", "EyUaLi28") or
die ("sprawdz po³¹czenie");

mysql_select_db("s173330");
$wstaw = "INSERT INTO zamow (email, tytul, cena) VALUES ('$email', '$tytul', '$cena')";
$results = mysql_query($wstaw);

header('Location: zamow2.html');
?>