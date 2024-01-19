<?php
require "user_connect.php";

$Fname=$_POST["Fname"];
$Lname=$_POST["Lname"];
$Uname=$_POST["Uname"];
$Addr=$_POST["Addr"];
$Mob=$_POST["Mob"];
$Password=$_POST["Password"];
//echo $Fname;
$sql="INSERT INTO `registered`(`Fname`, `Lname`, `Uname`, `Addr`, `Mob`, `Password`) VALUES ('$Fname', '$Lname', '$Uname', '$Addr', $Mob, '$Password')";
$result=mySQLi_query($conn,$sql);
?>
<html>
<body>
<h2 style="text-align:center">You have been successfully registered !!</h2>
</body>
</html>