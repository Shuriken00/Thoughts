<?php
require "header.php";

 ?>
 <?php 
 
if (isset($_SESSION['username'])) {
    echo "<p>logged in </p>";
}
?>
 <?php
require "footer.php";
 ?>
