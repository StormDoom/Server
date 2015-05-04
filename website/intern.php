<?php 
session_start(); 
?> 
<?php 

$verbindung = mysqli_connect("localhost", "homepage" , "homepage");
mysqli_select_db("homepage");
//or die ("Datenbank konnte nicht ausgewählt werden"); 

$username = $_SESSION['username'];
//$abfrage = "SELECT usergroup FROM login WHERE username LIKE $username LIMIT 1";
$ergebnis = mysqli_query("SELECT * FROM login");
$row = mysqli_fetch_object($ergebnis); 
	echo $verbindung;
	echo "<br>";
	echo $username;
	echo "<br>";
	echo $abfrage;
	echo "<br>";
	echo $ergebnis;
	echo "<br>";
	echo $row;
//echo "<br>";
//if(!isset($_SESSION["username"])) 
//{ 
//echo "Bitte erst <a href=\"login.html\">einloggen</a>"; 
//exit; 
//}
 //  else
//   {
 //     if($row->usergroup != "secure")
   //   {
     // echo "Du bist noch nicht freigeschaltet. Bitte gedulde dich etwas."
   //   }
  //      else
    //     {
 //         echo $abfrage;
 //         echo "<br>";
 //         echo $ergebnis;
//         echo "<br>";
//          echo $row;
//         echo "<br>";
//          echo $_SESSION['username'];
         //echo "Zum FTP geht es <a href=\"http://stormdoom.noip.me/ftp\">hier </a> lang.";
         //}
//   }
  // exit; 
?> 
