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
<h1>Add Vehicle</h1>
<form method="post" action="include/add_vehicle2-inc.php">
<input type="text" name="vlicence" placeholder="Vehicle Licence" required>
<input type="text" name="type" placeholder="Type">
<input type="text" name="colour" placeholder="Vehicle Colour">
<input type="text" name="owner" placeholder="Vehicle Owner" required>
<button type="submit" name="submit">Add</button>
</form>
</div>
<?php 
require_once 'include/footer.php';
?>