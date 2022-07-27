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
<h1>look up people information</h1>
<form method="post" action="include/people_name_lookup-inc.php">
<input type="text" name="name" placeholder="Search by name" required>
<button type="submit" name="submit1">Search</button>
</form>

<form method="post" action="include/people_licence_lookup-inc.php">
<input type="text" name="licence" placeholder="Search by driving licence" required>
<button type="submit" name="submit2">Search</button>
</form>
</div>

<?php 
require_once 'include/footer.php';
?>