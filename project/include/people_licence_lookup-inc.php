
<?php 
require "database.php";
session_start();
$searchlicence=$_POST['licence'];
$sql0="SELECT * FROM People WHERE People_licence LIKE '$searchlicence'";
$_SESSION["licencedisplay-sql"]=$sql0;
$result=mysqli_query($conn, $sql0);
$rownum=mysqli_num_rows($result);
if($rownum>0){
    header("Location:../people_licence_lookup_display.php");
    //echo "<header>";
    //   echo "<link rel='stylesheet' href='style.css'>";
    //    echo "</header>";
    //    echo "<table id='a'>";
    //    echo "<tr>";
    //    echo "<td>ID</td> ";
    //    echo "<td>Name</td>";
    //    echo "<td>Address</td> ";
    //    echo "<td>Driving Licence</td> ";
    //    echo "<tr>";
    //while($row=mysqli_fetch_assoc($result)){
    //    echo "<tr>";
    //    echo "<td>".$row['People_ID']."</td> ";
    //    echo "<td>".$row['People_name']."</td> ";
    //    echo "<td>".$row['People_address']."</td> ";
    //    echo "<td>".$row['People_licence']."</td> ";
    //    echo "<tr>";
    //    echo "</table>";
    //}
    //echo "<br>";
    //echo "<a href='../userhome.php'>return to user page</a>";
    //echo "<br>";
    //echo "<a href='../people_lookup.php'>search another data</a>";
    
}else{
	echo "<script>alert('No data exists!');window.location='../people_lookup.php'</script>";
    //header("Location:../people_lookup.php?error=nodata");
    //need to give a notice "no data exists"
}
?>


