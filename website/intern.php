<?php 
session_start(); 
?> 

<?php 
if(!isset($_SESSION["username"])) 
   { 
   echo "Bitte erst <a href=\"login.html\">einloggen</a>"; 
   exit; 
   }
else
   {
   echo "Zum FTP geht es <a href=\"http://stormdoom.noip.me/ftp\">hier </a> lang.";
   }
   exit; 
?> 
