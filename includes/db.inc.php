<?php
$servername= "127.0.0.1";
$dbuser= "password";
$dbpass= "123";
$dbname="thoughtsdb";

$conn = mysqli_connect($servername, $dbuser, $dbpass, $dbname);
if (!$conn) {
die("spinning erro " .mysqli_connect_error());
}
