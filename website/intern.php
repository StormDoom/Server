<?php 
session_start(); 
?> 
<?php 
$verbindung = mysql_connect("localhost", "homepage" , "homepage");
mysql_select_db("homepage")
or die ("Datenbank konnte nicht ausgewählt werden"); 
     echo $_SESSION['username'];
$username = $_SESSION['username'];
     echo "<br>";
     echo $username;
$abfrage = "SELECT usergroup FROM login WHERE username LIKE domse LIMIT 1";
     echo "<br>";
     echo $abfrage;
$ergebnis = mysql_query($abfrage);
     echo "<br>";
     echo $username;
     echo "<br>";
     echo $abfrage;
     echo "<br>";
     echo $ergebnis;
     echo "<br>";
     echo $verbindung;
     
//$row = mysql_fetch_object($ergebnis);
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
