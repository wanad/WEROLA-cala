<?php
session_start();
?>
<html>
<body>
<center>
<?php
$_SESSION = array();
session_destroy();
echo "Zosta�e� wylogowany. Zapraszamy ponownie!<br>


<a href='index.html'>Wr�� na stron� g��wn�.</a></center></body></html>";