<?php
$servername= "127.0.0.1";
$dbuser= "thoughts";
$dbpass= "123456789";
$dbname="thoughtsdb";


$conn = mysqli_connect($servername, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
  die("spinning erro " .mysqli_connect_error());
}
?>