<?php 
session_start(); 
?> 
<?php 
//$verbindung = mysql_connect("localhost", "homepage" , "homepage") 
//or die("Verbindung zur Datenbank konnte nicht hergestellt werden"); 
//mysql_select_db("homepage") or die ("Datenbank konnte nicht ausgewählt werden"); 

$group=mysql_query("SELECT usergroup FROM login WHERE username=$username)
if(!isset($_SESSION["username"])) 
   { 
   echo "Bitte erst <a href=\"login.html\">einloggen</a>"; 
   exit; 
   }
   elseif(!isset($group=="secure"))
      {
      echo "Du bist noch nicht freigeschaltet. Bitte gedulde dich etwas."
      }
         else
         {
         echo "Zum FTP geht es <a href=\"http://stormdoom.noip.me/ftp\">hier </a> lang.";
         }
   exit; 
?> 
