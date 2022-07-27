<?php 
require 'database.php';
session_start();

$name=$_POST['peoplename'];
$address=$_POST['peopleaddress'];
$licence=$_POST['peoplelicence'];

$sql="INSERT INTO People (People_name, People_address, People_licence) VALUES ('$name', '$address', '$licence')";
$result=mysqli_query($conn,$sql);
echo "<script>alert('Successfully added!');window.location='../add_vehicle.php'</script>";
//header("Location:../add_vehicle.php?result=addingsuccess");
?>
