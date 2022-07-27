<?php 
session_start();
require 'database.php';
$username=$_SESSION['username'];
$originalpassword;
$sql0="select * from users where username='$username'";
$result0=mysqli_query($conn,$sql0);
while($row=mysqli_fetch_assoc($result0)){
    $originalpassword=$row['password'];
}
$oldpassword=$_POST['oldpassword'];
$newpassword=$_POST["newpassword"];

if($oldpassword===$originalpassword){
    $sql1="UPDATE users SET password='$newpassword' where users.username='$username'";
    mysqli_query($conn, $sql1);
	echo "<script>alert('Successfully changed!');window.location='index.php'</script>";
    //header("Location:index.php");
    //need to show "change successful"
}else{
	echo "<script>alert('Wrong password!');window.location='../change_password.php'</script>";
    //header("Location:../change_password.php?error=wrongpassword");
    // need to show the error "wrong password"
}

?>