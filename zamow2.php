<?php require("check.php"); ?>



<html>
<head>
<META HTTP-EQUIV="content-type" CONTENT="text/html; charset=UTF-8">
<META name="description" content="WEROLA to internetowa wypożyczalnia filmów video.">
<META name="keywords" content="vod, video, online, wypożyczalnia, filmów">
<title>WEROLA Wypożyczalnia filmów VIDEO on-line</title>
<style type="text/css">
a:link {
    color: #000;
	text-decoration: none;
}

a:visited {
    color: #000;
	text-decoration: none;
}

a:hover {
    color: #000;
	text-decoration: none;
}

a:active {
    color: #000;
	text-decoration: none;
}
table.one { border: 0px; border-spacing: 0px; position: fixed; top: 30px; left: 200px; background-color: #fff; width: 900px; }
td.a { height: 40px; background-color: red; text-align: right; }
td.b { height: 20px; background-color: #000; text-align: center; }
td.c { height: 40px; background-color: white; text-align: center; }
.naglowek { font-family: Tahoma; font-size: 10pt; color: #000; margin-right: 20px; }
.naglowek1 { font-family: Tahoma; font-size: 10pt; color: #000; }
.tekst { font-family: Tahoma; font-size: 12pt; color: #fff; margin-top: 10px; margin-bottom: 10px; }
table.two { border: 0px; border-spacing: 0px; position: fixed; top: 360px; left: 200px; background-color: #cecfce; width: 900px; }
td.menu { width: 250px; background-color: gray; text-align: left; }
.tekst-menu { font-family: Tahoma; color: #000; font-size: 10pt; margin: 10px; }
</style>
</head>
<body background="images/background.png">
<div>
<table class="one">
<tr><td class="a"><p class="naglowek"><b><a href="logowanie.html">Zaloguj się</a></b> | <a href="rejestracja.html"><b>Zarejestruj się</b></a></span></td></tr>
<tr><td><a href="index.html"><img border="0" src="images/header.png"></a></td></tr>
<tr><td class="b"><div class="tekst"><b>Wypożyczalnia filmów on-line - 24 godziny przez 7 dni w tygodniu</b><br></td><tr>
<tr><td class="c">
<span class="naglowek1">
<b><a href="index.html">Strona główna</a></b> |
<b><a href="zamow2.php">Zamów film</a></b> |
<b><a href="status.php">Obejrzyj zamowione filmy</a></b> |
<b><a href="wyloguj.php">Wyloguj</a></b>
</span>
</div></td></tr>
</table>
<table class="two">
<tr>
<td>

<form name ="formularz1" action="zamow.php" method="POST">
<div>
	<center><b>wypożycz film :</b><br>
	<br>
	<table>
	<tr>
		<td>Email :</td> <td><input type="text" name="email" size="25" maxlength=60 "></td>
	</tr>
	<tr>
		<td>Tytul :</td> <td><input type="text" name="tytul" size="25" maxlength=30 "></td>
	</tr>
	<tr>
		<td>Cena:</td> <td><input type="text" name="cena" size="25" maxlength=20></td>
	</tr>
	</table>
	<input type = "submit" value="Wyslij"><br>
    <input type="reset" value="Wyczysc wszystko" /></br></center>
</div>
</form>


</td>
</tr>
</table>
</div>
</body>
</html>


