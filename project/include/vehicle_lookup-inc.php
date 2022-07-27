<?php 
require 'database.php';
session_start();
$vlicence=$_POST['vlicence'];
$sql0="SELECT * FROM Ownership 
       inner join Vehicle on Ownership.Vehicle_ID=Vehicle.Vehicle_ID 
       inner join People on Ownership.People_ID=People.People_ID 
       where Vehicle_licence LIKE '$vlicence'";
$_SESSION["vlicencedisplay-sql"]=$sql0;
$result=mysqli_query($conn, $sql0);
$rownum=mysqli_num_rows($result);
if($rownum>0){
    header("Location:../vehicle_lookup_display.php");
    //echo "<link rel='stylesheet' href='style.css'>";
    //    echo "</header>";
    //    echo "<table id='a'>";
    //    echo "<tr>";
    //   echo "<th>Type</th>";
    //    echo "<th>Colour</th>";
    //    echo "<th>Vehicle Licence</th>";
    //    echo "<th>Owner Name</th>";
    //    echo "<th>Driving Licence</th>";
    //    echo "<tr>";
    //while($row=mysqli_fetch_assoc($result)){
    //    echo "<table>";
    //    echo "<tr>";
    //    echo "<td>".$row['Vehicle_type']."</td>";
    //    echo "<td>".$row['Vehicle_colour']."</td>";
    //    echo "<td>".$row['Vehicle_licence']."</td>";
    //    echo "<td>".$row['People_name']."</td>";
    //    echo "<td>".$row['People_licence']."</td>";
    //    echo "<tr>";
    //   echo "</table>";
    //}
    //echo "<a href='index.php'>return to user page</a>";
    //echo "<br>";
    //echo "<a href='../people_lookup.php'>search another data</a>";
}else{
    echo "<script>alert('No data exists!');window.location='../vehicle_lookup.php'</script>";
    //header("Location:../vehicle_lookup.php?error=nodata");
    //need to give a notice "no data exists"
}
?>