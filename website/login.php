<?php 
session_start(); 
?> 

<?php 
$verbindung = mysql_connect("localhost", "homepage" , "homepage") 
or die("Verbindung zur Datenbank konnte nicht hergestellt werden"); 
mysql_select_db("homepage") or die ("Datenbank konnte nicht ausgewählt werden"); 

$username = $_POST["username"]; 
$password = md5($_POST["password"]); 

$abfrage = "SELECT username, password FROM login WHERE username LIKE '$username' LIMIT 1"; 
$ergebnis = mysql_query($abfrage); 
$row = mysql_fetch_object($ergebnis); 

if($row->password == $password) 
    { 
    $_SESSION["username"] = $username; 
    echo "Login erfolgreich. <br> "; 
    echo "Du wirst sofort weitergeleitet."
    sleep(4);
    header("Location: http://stormdoom.noip.me/intern.php/"); 
    echo "Falls die Weiterleitung nicht funktioniert bitte <a href=\"http://stormdoom.noip.me/intern.php\">hier</a> drücken."
    } 
else 
    { 
    echo "Benutzername und/oder Passwort waren falsch. <a href=\"login.html\">Login</a>"; 
    } 

?>
