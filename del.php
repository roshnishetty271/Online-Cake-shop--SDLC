<?php
require "user_connect.php";
session_start();
$name=$_SESSION["user"];
//echo $Fname;
$sql="DELETE  FROM `registered` where Uname='$name'" ;
$sql1="DELETE  FROM `cart` where Uname='$name'  ";
$result=mySQLi_query($conn,$sql);
$result=mySQLi_query($conn,$sql1);
 if ($result)
	echo"Deleted successfuly";

?>
<html>
<body background="done.jpg">
</br>
</br>
</br>
</br>
</br>
<center>
<h2 style="text-align:center">You have been successfully unsubscribed from this page !!</h2>
</center>
</body>
</html>