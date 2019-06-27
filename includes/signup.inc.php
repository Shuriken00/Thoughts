<?php
if (isset($_POST['signup'])) {
  require 'db.inc.php';
  $username = $_POST['UserName'];
  $email = $_POST['Email'];
  $passwd = $_POST['Password'];
  $cpasswd = $_POST['Confirm-Password'];

  if (empty($username) || empty($email) || empty($passwd) || empty($cpasswd)) {
    header("location: ../signup.php?error=emptyfields&UserName=".$username."&email=".$email);
    exit();
  }
  elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("location: ../signup.php?error=Invalidemail&UserName=");
    exit();
  }
  elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("location: ../signup.php?error=Invalidemail&UserName=".$username);
    exit();
  }
  elseif(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("location: ../signup.php?error=Invalideusernamel&UserName=".$email);
    exit();
  }
  elseif ($passwd !== $cpasswd) {
    header("location: ../signup.php?error=PasswordDoesntMatch&username=".$username."&email".$email);
    exit();
  }
  else {
    $sql = "SELECT username FROM users WHERE username=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: ../signup.php?error=SQLDDEAD!");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $ResultCheck = mysqli_stmt_num_rows($stmt);
      if ($ResultCheck > 0) {
      header("location: ../signup.php?error=UserNameTaken&email=".$email);
      exit();
      }
      else{
        $sql = "INSERT INTO users (username, email, pass) VALUES (?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("location: ../signup.php?error=SQLDDEAD");
          exit();
      }
      else {
        $hashpassword = password_hash($passwd, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashpassword);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        header("location: ../signup.php?success=signup");
        exit();
      }
    }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else {
  header("location: ../signup.php");
  exit();
}
