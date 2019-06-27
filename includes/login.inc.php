<?php
if (isset($_POST['login'])) {
require 'db.inc.php';
$email = $_POST['Email'];
$passwd = $_POST['Password'];
if (empty($email) || empty($passwd)) {
  header("location: ../index.php?error=emptyfields");
  exit();
}
else {
  $sql = "SELECT *  FROM users WHERE username=? OR email=?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: ../index.php?error=sqlerror");
  exit();
  }
  else {
    mysqli_stmt_bind_param($stmt, "ss",$email,$email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
     $passwdcheck = password_verify($passwd, $row['pass']);
     if ($passwdcheck == false) {
       header("location: ../index.php?error=wrongpassword");
 exit();
     }
     elseif($passwdcheck == true) {
session_start();
$_SESSION['username'] = $row['username'];
$_SESSION['Email'] = $row['email'];
    header("location: ../index.php?success=loggedin");
 exit();
     }

     else {
        header("location: ../index.php?error=wrongpassword");
 exit();
     }
    }
    else {
        header("location: ../index.php?error=nouser");
  exit();
    }
}
}
}
else{
  header("location: ../index.php");
  exit();
}
