<?php
$servername= "127.0.0.1";
$dbuser= "sampleuser";
$dbpass= "samplepass";
$dbname="sampledb";

$servername= "your server";
$dbuser= "database user";
$dbpass= "database password";
$dbname="database name";

$conn = mysqli_connect($servername, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
  die("spinning erro " .mysqli_connect_error());
}
?>