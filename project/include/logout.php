<?php
session_start();
session_destroy();
echo "<script>alert('Successfully logged out!');window.location='index.php'</script>";
//header("Location:index.php");
?>
