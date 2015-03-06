<?php

$email = $_POST['email'];
$haslo = $_POST['haslo'];
$imie = $_POST['imie'];

$message = "Witaj $imie $nazwisko \n Dziekujemy za rejestracje";
$message = wordwrap($message, 70);

$connect = mysql_connect("10.254.94.2", "s173330", "EyUaLi28") or
die ("sprawdz po³¹czenie");

mysql_select_db("s173330");
$wstaw = "INSERT INTO uzytkownicy (email, haslo, imie) VALUES ('$email', '$haslo', '$imie')";
$results = mysql_query($wstaw);

mail($email, 'Dziekujemy za rejestracje', $message);
header("Location: rejestracja2.html");

?>