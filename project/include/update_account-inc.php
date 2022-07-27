<?php 

if(isset($_POST['submit'])){
    //add database connection
    require 'database.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirmpass=$_POST['confirmpassword'];

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }else{
        if($confirmpass !== $password){
			echo "<script>alert('Password does not match!');window.location='../update_account.php'</script>";
            //header("Location:../update_account.php?error=passnotmatch");
            //need to show "password does not match"
        }else{
        $sql0="select * from users where username='$username' && password='$password'";
        $result0=mysqli_query($conn,$sql0);
        if(mysqli_num_rows($result0)>0){
			echo "<script>alert('This police officer is already in the database!');window.location='../update_account.php'</script>";
            //header("Location:../update_account.php?error=useralreadyexist");
            //need to show "user already exists"
        }else{
             $sql="insert into users (username,password) values ('$username',$password)";
             if(mysqli_query($conn,$sql)){
			echo "<script>alert('Successfully added!');window.location='../update_account.php'</script>";
             //header("Location:../update_account.php");
             //need to show "sucessfully added"
             }
        }
        mysqli_close($conn);

        }
        
    }
}
?>