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
<h1>No personal data exists!</h1>
<h2>Please record new person information</h2>
<form method="post" action="include/add_people-inc.php">
<input type="text" name="peoplename" placeholder="Name" required>
<input type="text" name="peopleaddress" placeholder="Address">
<input type="text" name="peoplelicence" placeholder="Personal Licence" required>
<button type="submit" name="submit">Add</button>
</form>
</div>
<?php 
require_once 'include/footer.php';
?>