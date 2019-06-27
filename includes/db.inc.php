<?php
$servername= "your server ip or address";
$dbuser= "your database username";
$dbpass= "your database password";
$dbname="your database name";


$conn = mysqli_connect($servername, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
  die("spinning erro " .mysqli_connect_error());
}
?>
