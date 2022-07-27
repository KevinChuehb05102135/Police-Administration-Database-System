<?php 
require 'database.php';
session_start();

$incidentid=$_POST['incidentid'];
echo $incidentid;

$sql="SELECT * from Incident where Incident_ID='$incidentid'";
$result=mysqli_query($conn,$sql);
$numrow=mysqli_num_rows($result);
if($numrow>0){
$_SESSION["sql"]=$sql;
$_SESSION["incidentid"]=$incidentid;
header("Location:../retrieve_report_display.php");
}else{
echo "<script>alert('No data exists!');window.location='../retrieve_report.php'</script>";
//header("Location:../retrieve_report.php?error=nodataexists");
//give out notice "no data exists"
}
?>