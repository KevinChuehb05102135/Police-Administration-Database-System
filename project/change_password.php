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
<h1>Change Password</h1>
<form method="post" action="include/change_password-inc.php">
<input type="password" name="oldpassword" placeholder="Original Password" required>
<input type="password" name="newpassword" placeholder="New Password" required>
<button type="submit" name="submit">Submit</button>
</form>
</div>
<?php 
require_once 'include/footer.php';
?>