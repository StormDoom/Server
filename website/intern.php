<?php 
session_start(); 
?> 
<?php 
//$verbindung = mysql_connect("localhost", "homepage" , "homepage");
//mysql_select_db("homepage");
//or die ("Datenbank konnte nicht ausgewählt werden"); 
echo $_SESSION['username'];
$username = $_SESSION['username'];
$abfrage = "SELECT usergroup FROM login WHERE username LIKE $username LIMIT 1";
$ergebnis = mysql_query($abfrage);
$row = mysql_fetch_object($ergebnis);

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
          echo $abfrage;
          echo $ergebnis;
          echo $row;
          echo $_SESSION['username'];
         //echo "Zum FTP geht es <a href=\"http://stormdoom.noip.me/ftp\">hier </a> lang.";
         //}
//   }
  // exit; 
?> 
