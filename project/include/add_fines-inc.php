<?php 
require 'database.php';
session_start();

$incidentid=$_POST['incidentid'];
$fineamount=$_POST['fineamount'];
$finepoints=$_POST['finepoints'];

//check incident id existence in incident table
$sqlie="SELECT * from Incident where Incident_ID='$incidentid'";
$resultie=mysqli_query($conn,$sqlie);
$rownumie=mysqli_num_rows($resultie);
if($rownumie>0){//incident exists 
    //check whether incident already has fine data
    $sqli="SELECT * from Fines where Incident_ID='$incidentid'";
    $resulti=mysqli_query($conn,$sqli);
    $rownumi=mysqli_num_rows($resulti);
    if($rownumi>0){//fine already exists
        //give out notice "fine already exist"
		echo "<script>alert('The fine of this incident already exists! Please check the incident ID');window.location='../add_fines.php'</script>";
        //header("Location:../add_fines.php?error=finesalreadyexists");
    }else{//fine not yet exists
        $sqlf="INSERT INTO Fines (Fine_Amount, Fine_Points, Incident_ID) VALUES ('$fineamount', '$finepoints', '$incidentid');";
        mysqli_query($conn,$sqlf);
        //give out notice "adding success"
		echo "<script>alert('Successfully added!');window.location='../add_fines.php'</script>";
        //header("Location:../add_fines.php?result=addingsuccess!");
    }
}else{//incident does not exist
    //give out notice "incident does not exist"
	echo "<script>alert('The incident does not exist, please check the incident ID');window.location='../add_fines.php'</script>";
    //header("Location:../add_fines.php?error=incidentnotexist!");
}





?>