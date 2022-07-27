<?php
session_start();
if(isset($_POST['submit'])){
    require 'database.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }else{
        $sql="select * from users where username= '$username' && password='$password'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            $_SESSION['login']=true;
            $_SESSION['username']=$username;
            header("Location:index.php");
        }else{
			echo "<script>alert('Wrong password!');window.location='../login.php'</script>";
            //header("Location:../login.php?error=wrongpassword");
        }


    }
}



?>