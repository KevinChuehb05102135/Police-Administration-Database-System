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
<h1>Look up vehicle</h1>
<form method="post" action="include/vehicle_lookup-inc.php">
<input type="text" name="vlicence" placeholder="Vehicle licence"required>
<button type="submit" name="submit">Search</button>
</form>
</div>
<?php 
require_once 'include/footer.php';
?>