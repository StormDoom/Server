<?php 
session_start(); 
?> 
<?php 
//$verbindung = mysql_connect("localhost", "homepage" , "homepage");
//mysql_select_db("homepage")
///or die ("Datenbank konnte nicht ausgewählt werden"); 
echo $_SESSION['username'];
$foo = $_SESSION['username'];
echo "<br>";
echo $foo;
echo "<br>";
echo $_SESSION['username'];
// $abfrage = "SELECT usergroup FROM login WHERE username LIKE $username LIMIT 1";
//$ergebnis = mysql_query($abfrage);
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
