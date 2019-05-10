<?php
$servername= "127.0.0.1";
$dbuser= "sampleuser";
$dbpass= "samplepass";
$dbname="sampledb";

$conn = mysqli_connect($servername, $dbuser, $dbpass, $dbname);
if (!$conn) {
die("spinning erro " .mysqli_connect_error());
}
