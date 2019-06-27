<?php 
session_start();

if (isset($_SESSION['username'])) {
echo '<form action="includes/logout.inc.php" method="POST">
<button type="submit" name="submit">Logout</button>
</form>';
}else {
    echo '<form action="includes/signup.inc.php" method="POST">
    <input type="text" name="UserName" placeholder="UserName...">
    <input type="text" name="Email" placeholder="Email...">
    <input type="password" name="Password" placeholder="Password...">
    <input type="password" name="Confirm-Password" placeholder="Confirm Password...">
    <button type="submit" name="signup">Signup</button>
    </form>';
}
?>
