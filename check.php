<?php
session_start();
?>

<html>
<head>
	<title>podstrona</title>
</head>
<body>
<?php
if($_SESSION["zalogowany"]==0){echo "nie masz dostêpu do tej czêœci witryny. <a href='logowanie.html'>Zaloguj siê</a></body></html>;"; exit();}
?>