<?php 
session_start(); 
?> 
<?php
$group=mysql_query("SELECT usergroup FROM homepage WHERE username=$username")


?>
<?php 
if(!isset($_SESSION["username"])) 
   { 
   echo "Bitte erst <a href=\"login.html\">einloggen</a>"; 
   exit; 
   }
   elseif(!isset($group=secure))
      {
      echo "Du bist noch nicht freigeschaltet. Bitte gedulde dich etwas."
      }
         else
         {
         echo "Zum FTP geht es <a href=\"http://stormdoom.noip.me/ftp\">hier </a> lang.";
         }
   exit; 
?> 
