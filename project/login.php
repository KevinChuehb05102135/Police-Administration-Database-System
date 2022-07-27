<?php 
require_once 'include/header.php';
?>

<div>
<h1>Log in</h1>
<form method="post" action="include/login-inc.php">
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>
<button type="submit" name="submit">Login</button>
</form>
</div>
<?php 
require_once 'include/footer.php';
?>