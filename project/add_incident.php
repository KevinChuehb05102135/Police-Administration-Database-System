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
<style>
  select{
    display:block;
    margin:20px auto;
    text-align:center;
    box-shadow:0 0 10px #666;
    width:250px;
    height:30px;
    background-color:#f2f2f2;
  }
  label{
    text-align:left;
  }
</style>
<div>
<h1>File new incident</h1>
<form method="post" action="include/add_incident-inc.php">
<label for="offencedescription">Offence Description : </label>
<select name="offencedescription" id="offencedescription" required>
    <option value="Speeding">Speeding</option>
    <option value="Speeding on a motorway">Speeding on a motorway</option>
    <option value="Seat belt offence">Seat belt offence</option>
    <option value="Illegal parking">Illegal parking</option>
    <option value="Drink driving">Drink driving</option>
    <option value="Driving without a licence">Driving without a licence</option>
    <option value="Traffic light offences">Traffic light offences</option>
    <option value="Cycling on pavement">Cycling on pavement</option>
    <option value="Failure to have control of vehicle">Failure to have control of vehicle</option>
    <option value="Dangerous driving">Dangerous driving</option>
    <option value="Careless driving">Careless driving</option>
    <option value="Dangerous cycling">Dangerous cycling</option>
  </select>
<input type="text" name="incidentpeople" placeholder="People Name" required>
<input type="text" name="incidentvlicence" placeholder="Vehicle Licence" required>
<input type="date" name="incidentdate" required>
<input type="textarea" name="incidentreport" placeholder="Report">
<button type="submit" name="submit">Add</button>
</form>
</div>
<?php 
require_once 'include/footer.php';
?>