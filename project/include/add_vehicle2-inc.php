<?php 
require 'database.php';
session_start();
$vlicence=$_POST['vlicence'];
$type=$_POST['type'];
$colour=$_POST['colour'];
$owner=$_POST['owner'];
//chech whether person exists
$sql0="SELECT * FROM People WHERE People_name ='$owner'";
$result=mysqli_query($conn,$sql0);
$rownum=mysqli_num_rows($result);
if($rownum>0){
    //check whether vehicle exists
    $sql1="SELECT * FROM Vehicle where Vehicle_licence='$vlicence'";
    $result1=mysqli_query($conn,$sql1);
    $rownum1=mysqli_num_rows($result1);
    if($rownum1>0){
		echo "<script>alert('The Vehicle already exist! Please check vehicle licence!');window.location='../add_fines.php'</script>";
        //header("Location:../add_vehicle2.php?error=dataalreadyexists");
    }else{
        //add Vehicle table
        $sql2="INSERT INTO Vehicle (Vehicle_type, Vehicle_colour, Vehicle_licence) VALUES ('$type', '$colour', '$vlicence')";
        mysqli_query($conn,$sql2);
        //search vehicle id
        $vid;
        $sqlvid="SELECT * from Vehicle where Vehicle_licence='$vlicence'";
        $resultvid=mysqli_query($conn,$sqlvid);
        $rownumvid=mysqli_num_rows($resultvid);
        if($rownumvid>0){
            while($row=mysqli_fetch_assoc($resultvid)){
                $vid=$row['Vehicle_ID'];
            }
        }
        //search People ID
        $pid;
        $sqlpid="SELECT * FROM People where People_name LIKE '$owner'";
        $resultpid=mysqli_query($conn,$sqlpid);
        $rownumpid=mysqli_num_rows($resultpid);
        if($rownumpid>0){
            while($row=mysqli_fetch_assoc($resultpid)){
                $pid=$row['People_ID'];
            }
        }
        //insert into Ownership table
        $sql3="INSERT INTO Ownership (People_ID, Vehicle_ID) VALUES ('$pid', '$vid')";
        mysqli_query($conn,$sql3);
		echo "<script>alert('Successfully added!');window.location='../add_incident.php'</script>";
        //header("Location:../add_incident.php?result=ownershipaddingsuccess!");
        //give notice "adding success"
    }
}else{
	echo "<script>alert('This person does not exist in the database! Please add new person data!');window.location='../add_people2.php'</script>";
    //header("Location:../add_people2.php?error=nopersondataexists");
    //give out notice "no person exists"
}

?>