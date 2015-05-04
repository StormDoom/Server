
<?php 
$verbindung = mysql_connect("localhost", "homepage" , "homepage") 
or die("Verbindung zur Datenbank konnte nicht hergestellt werden"); 

mysql_select_db("homepage") or die ("Datenbank konnte nicht ausgewählt werden"); 

$username = $_POST["username"]; 
$password = $_POST["password"]; 
$password2 = $_POST["password2"]; 
$group = 'new';

if($password != $password2 OR $username == "" OR $password == "") 
    { 
    echo "Eingabefehler. Bitte alle Felder korekt ausfüllen. <a href=\"eintragen.html\">Zurück</a>"; 
    exit; 
    } 
$password = md5($password); 

$result = mysql_query("SELECT id FROM login WHERE username LIKE '$username'"); 
$menge = mysql_num_rows($result); 

if($menge == 0) 
    { 
    $eintrag = "INSERT INTO login (username, password, usergroup) VALUES ('$username', '$password', '$group')"; 
    $eintragen = mysql_query($eintrag); 

    if($eintragen == true) 
        { 
        echo "Benutzername <b>$username</b> wurde erstellt. <a href=\"login.html\">Login</a>"; 
        } 
    else 
        { 
        echo "Fehler beim Speichern des Benutzernames. <a href=\"eintragen.html\">Zurück</a>"; 
        } 


    } 

else 
    { 
    echo "Benutzername schon vorhanden. <a href=\"eintragen.html\">Zurück</a>"; 
    } 
?>
