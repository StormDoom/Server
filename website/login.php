<html>
<form method="post">
Dein Username:<br>
<input type="text" size="24" maxlength="50"
name="username"><br><br>

Dein Passwort:<br>
<input type="password" size="24" maxlength="50"
name="password"><br><br>

<input type="submit" value="Login">
</form>
</html>
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
    echo "Login erfolgreich. <br> <a href=\"intern.php\">Gesch&#252;tzer Bereich</a>"; 
    } 
else 
    { 
    echo "Benutzername und/oder Passwort waren falsch. <a href=\"login.html\">Login</a>"; 
    } 

?>
