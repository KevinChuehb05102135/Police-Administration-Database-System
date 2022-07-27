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
$sql=$_SESSION["namedisplay-sql"];
$result=mysqli_query($conn, $sql);?>
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

</style>
<div>
<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Address</th>
<th>Driving Licence</th>
<tr>
<?php
while($row=mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$row['People_ID']."</td> ";
    echo "<td>".$row['People_name']."</td> ";
    echo "<td>".$row['People_address']."</td> ";
    echo "<td>".$row['People_licence']."</td> ";
    echo "<tr>";
    }
?>
</table>

<form action="include/index.php">
    <input type="submit" value="return to user page" />
</form>
<form action="people_lookup.php">
    <input type="submit" value="Search another data" />
</form>
</div>



<?php 
require_once 'include/footer.php';
?>