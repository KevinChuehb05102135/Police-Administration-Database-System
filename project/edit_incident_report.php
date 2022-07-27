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
<h1>Edit Incident Report</h1>
<form method="post" action="include/edit_incident_report-inc.php">
<input type="text" name="editreport" placeholder="Edit the content of the incident report"required>
<button type="submit" name="submit">EDIT</button>
</form>
</div>
<?php 
require_once 'include/footer.php';
?>