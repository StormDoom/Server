<?php 
session_start(); 
?> 
<?php 
$user = $_SESSION["username"];
$dbhost = 'localhost';
$dbuser = 'homepage';
$dbpass = 'homepage';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$sql = "SELECT usergroup FROM login WHERE username=$user ";
mysql_select_db('homepage');

$result = mysql_query( $sql, $conn );

if(! $result )
{
  die('Could not get data: ' . mysql_error());
}
$usergroup = mysql_result($result, 0);

if(!isset($_SESSION["username"])) 
{ 
echo "Bitte erst <a href=\"login.html\">einloggen</a>"; 
exit; 
}
else
{
	if($usergroup != "registered")
	{
		echo "Du bist noch nicht freigeschaltet. Bitte gedulde dich etwas.";
		
	}
	else
	{
		echo "Zum FTP geht es <a href=\"http://stormdoom.noip.me/ftp\">hier </a> lang.";
	}
}
exit; 
?> 
