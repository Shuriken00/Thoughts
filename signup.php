<nav>
		   <a href="index.php">
		     <img src="img/logo.png" alt="logo">
			 </a>

 <main>
<h1>Sign UP</h1>
<form action="includes/signup.inc.php" method="POST">
<input type="text" name="UserName" placeholder="UserName...">
<input type="text" name="Email" placeholder="Email...">
<input type="password" name="Password" placeholder="Password...">
<input type="password" name="Confirm-Password" placeholder="Confirm Password...">
<button type="submit" name="signup">Signup</button>
 </main>
 <?php
require "footer.php";
 ?>
