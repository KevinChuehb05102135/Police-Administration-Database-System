<?php
$dbHOST="mysql.cs.nott.ac.uk";
$dbUSER="psxsc15_project";
$dbPASS="ZLOYTY";
$dbNAME="psxsc15_project";
//connection to mysql database
$conn=mysqli_connect($dbHOST,$dbUSER,$dbPASS,$dbNAME);
if(!$conn){
    die("database connection failed!");
}

?>