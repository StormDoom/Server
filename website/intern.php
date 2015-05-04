<?php 
session_start(); 
?> 
<?php 

$dbhost = 'localhost';
$dbuser = 'homepage';
$dbpass = 'homepage';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$sql = 'SELECT id, username, password, usergroup FROM login WHERE username='Josef' ';
mysql_select_db('homepage');

$result = mysql_query( $sql, $conn );

if(! $result )
{
  die('Could not get data: ' . mysql_error());
}

//while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
//{
//  echo "ID: {$row['id']}  <br> ".
//		"Name: {$row['username']} <br> ".
//		"Passwd: {$row['password']} <br> ".
//		"Group: {$row['usergroup']} <br> ".
//		"--------------------------------<br>";
//} 
//echo "Fetched data successfully\n";
//mysql_close($conn);
//$row->usergroup = mysql_fetch_object($result);
//echo $row->usergroup;
while($row = mysql_fetch_object($result))
{
	echo $row->username;
}
//echo "<br>";
//echo $retval;
//echo "{$row['usergroup']}";
	
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
