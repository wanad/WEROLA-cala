<?php
session_start();
?>
<html>
<body>
<center>
<?php
$_SESSION = array();
session_destroy();
echo "Zosta³eœ wylogowany. Zapraszamy ponownie!<br>


<a href='index.html'>Wróæ na stronê g³ówn¹.</a></center></body></html>";