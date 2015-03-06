
<?php
session_start();
mysql_connect("10.254.94.2","s173330","EyUaLi28");
mysql_select_db("s173330");

if(isset($_SESSION['zalogowany'])) {
echo "Witam, ".$_SESSION['email']; 
header("location: http://v-ie.uek.krakow.pl/~s174643/");
}else{

if(isset($_POST['wyslij'])) {


   if(mysql_num_rows(mysql_query("SELECT email, haslo
   FROM uzytkownicy WHERE email = '".$_POST['email']."' 
   && haslo = '".$_POST['haslo']."' ")) > 0) {

	if(mysql_num_rows(mysql_query("SELECT nr FROM uzytkownicy
       WHERE email = '".$_POST['email']."' 
       && haslo = '".$_POST['haslo']."' ")) > 0 ) {





           $_SESSION['zalogowany'] = true;
           $_SESSION['email'] = $_POST['email'];
           $_SESSION['haslo'] = $_POST['haslo'];
           echo "Jesteœ zalogowany.";

 header("location: http://v-ie.uek.krakow.pl/~s174643/"); 


       } else { 

   echo "Z³e has³o, proszê spróbowaæ ponownie";
}
} else { 
   echo "Nie ma takiego u¿ytkownika";
}
} else { 

?>
   

<?php
}
}
?>

