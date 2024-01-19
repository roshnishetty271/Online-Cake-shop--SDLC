<?php
// Start the session
session_start();

?>
<?php

require "user_connect.php";
$_SESSION["user"] = $_POST["Uname"];
$name=$_POST["Uname"] ;

$sql1="UPDATE `registered` SET Session='Yes' WHERE  Uname='$name'"; 
$result = mySQLi_query($conn,$sql1);

	$uid = $_POST["Uname"]; 
$pid = $_POST["Password"];

//$sql = "select * from login where user ='".$uid."' and password='anything'or'x'='x' "; //invalid name or password

$sql = "select * from registered where Uname ='".$uid."' and Password='".$pid."' "; //invalid password

//$sql="select * from user_details where user = '".$uid."' and password = ''; drop table xyz --"; // Piggy backed query injection


$result = mySQLi_query($conn,$sql);
if(mySQLi_num_rows($result)>0)
{echo "I am in";
header('Location: home1.php'); 
 


}
else
	echo "Invalid user id or password";
?>
