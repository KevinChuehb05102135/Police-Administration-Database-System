<?php
require 'database.php';
session_start();

$incidentid=$_SESSION['incidentid'];
$editreport=$_POST["editreport"];
$sqle="UPDATE Incident SET Incident_Report = '$editreport' WHERE Incident.Incident_ID = $incidentid";
mysqli_query($conn,$sqle);
echo "<script>alert('Successfully edited!');window.location='../retrieve_report_display.php'</script>";
//header("Location:../retrieve_report_display.php?result=editsuccess!");
 
 ?>