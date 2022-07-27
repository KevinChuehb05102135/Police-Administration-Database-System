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
<h1>Retrieve Incident Report</h1>
<form method="post" action="include/retrieve_report-inc.php">
<input type="text" name="incidentid" placeholder="Incident ID" required>
<button type="submit" name="submit">Search</button>
</form>
</div>
<?php 
require_once 'include/footer.php';
?>