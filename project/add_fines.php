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
<h1>Add Fine</h1>
<form method="post" action="include/add_fines-inc.php">
<input type="text" name="incidentid" placeholder="Incident ID" required>
<input type="text" name="fineamount" placeholder="Fine Amount" required>
<input type="text" name="finepoints" placeholder="Fine Points" required>
<button type="submit" name="submit">Add</button>
</form>
</div>
<?php 
require_once 'include/footer.php';
?>