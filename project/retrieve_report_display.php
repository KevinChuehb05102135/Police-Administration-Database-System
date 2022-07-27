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
<?php
session_start();
$sql=$_SESSION["sql"];
$result=mysqli_query($conn, $sql);
?>

<style>
th{
    background-color: #333;
    color: white;
    font-size: 0.875rem;
    text-transform: uppercase;
    letter-spacing: 2%;
}
table,td{
    text-align:center;
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    width:900px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
 }
 #link {
  background-color: #333;
  padding:10px;
  color: white;
  text-decoration: none;
  text-transform: uppercase;
}
</style>
<table>
<tr>
<th>Vehicle ID</th>
<th>People ID</th>
<th>Incident Date</th>
<th>Incident Report</th>
<th>Offence ID</th>
<tr>
<?php
while($row=mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$row['Vehicle_ID']."</td> ";
    echo "<td>".$row['People_ID']." </td> ";
    echo "<td>".$row['Incident_Date']."</td> ";
    echo "<td>".$row['Incident_Report']."</td> ";
    echo "<td>".$row['Offence_ID']."</td>";
    echo "<tr>";
    }
?>
</table>
<a href="edit_incident_report.php" id="link">EDIT</a>
<form action="include/index.php">
    <input type="submit" value="return to user page" />
</form>
<form action="retrieve_report.php">
    <input type="submit" value="Retrieve another report" />
</form>
<?php 
require_once 'include/footer.php';
?>