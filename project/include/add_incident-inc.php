<?php 
require 'database.php';
session_start();
$people=$_POST['incidentpeople'];
$vlicence=$_POST['incidentvlicence'];
$offencedescription=$_POST['offencedescription'];
$date=$_POST['incidentdate'];
$report=$_POST['incidentreport'];
//check vehicle existence
$sqlv="SELECT * FROM Vehicle where Vehicle_licence='$vlicence'";
$resultv=mysqli_query($conn,$sqlv);
$numrowv=mysqli_num_rows($resultv);
if($numrowv>0){//vehicle exists
    //check people existence
    $sqlp="SELECT * FROM People where People_name LIKE '$people'";
    $resultp=mysqli_query($conn,$sqlp);
    $numrowp=mysqli_num_rows($resultp);
    if($numrowp>0){//people exist
        //search vehicle ID
        $vid;
        $sqlvid="SELECT * from Vehicle where Vehicle_licence='$vlicence'";
        $resultvid=mysqli_query($conn,$sqlvid);
        $rownumvid=mysqli_num_rows($resultvid);
        if($rownumvid>0){
            while($row=mysqli_fetch_assoc($resultvid)){
                $vid=$row['Vehicle_ID'];
            }
        }
        //search people ID
        $pid;
        $sqlpid="SELECT * FROM People where People_name LIKE '$people'";
        $resultpid=mysqli_query($conn,$sqlpid);
        $rownumpid=mysqli_num_rows($resultpid);
        if($rownumpid>0){
            while($row=mysqli_fetch_assoc($resultpid)){
                $pid=$row['People_ID'];
            }
        }
        //search offence ID
        $oid;
        $sqloid="SELECT * FROM Offence where Offence_description='$offencedescription'";
        $resultoid=mysqli_query($conn,$sqloid);
        $rownumoid=mysqli_num_rows($resultoid);
        if($rownumoid>0){
            while($row=mysqli_fetch_assoc($resultoid)){
                $oid=$row['Offence_ID'];
            }
        }
        //insert into incident table
        $sqlincident="INSERT INTO Incident (Vehicle_ID, People_ID, Incident_Date, Incident_Report, Offence_ID) VALUES ('$vid', '$pid', '$date', '$report', '$oid');";
        mysqli_query($conn,$sqlincident);
		echo "<script>alert('Successfully added!');window.location='../add_incident.php'</script>";
        //header("Location:../add_incident.php?result=addingsuccesful!");
               
    }else{//people does not exist
	echo "<script>alert('This person does not exist in the database, Please add this person data into the database!');window.location='../add_people3.php'</script>";
        //header("Location:../add_people3.php?error=peoplenotexist!");
        //give out notice "people does not exist!"
    }
}else{//vehicle does not exist
    echo "<script>alert('This Vehicle does not exist! Please check the Vehicle Licence!');window.location='../add_vehicle2.php'</script>";
    //header("Location:../add_vehicle2.php?error=vehiclenotexists!");
    //give out notice "vehicle does not exist!"
}
?>