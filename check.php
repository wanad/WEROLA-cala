<?php
session_start();
?>

<html>
<head>
	<title>podstrona</title>
</head>
<body>
<?php
if($_SESSION["zalogowany"]==0){echo "nie masz dost�pu do tej cz�ci witryny. <a href='logowanie.html'>Zaloguj si�</a></body></html>;"; exit();}
?>