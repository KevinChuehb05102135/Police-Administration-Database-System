<?php 
require_once 'include/header.php';
?>
<?php 
session_start();
$passcheck=$_SESSION['login'];
if($passcheck!==true){
    header("Location:login.php");
}
?>
<div>
<h1>Add Account</h1>
<form method="post" action="include/update_account-inc.php">
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>
<input type="password" name="confirmpassword" placeholder="Confirm Password" required>
<button type="submit" name="submit">Add</button>
</form>
</div>
<?php 
require_once 'include/footer.php';
?>