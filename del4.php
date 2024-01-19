<?php
require "user_connect.php";
session_start();
$name=$_SESSION["user"];
//echo $Fname;
$sql1="DELETE  FROM `cart` where Uname='$name'  && Name='Delicious Chocolate Mousse'";
$result=mySQLi_query($conn,$sql1);
 if ($result)
	echo"</br></br></br></br><center>Deleted item from cart successfuly</center>";

?>
<html>
<body background="done.jpg">
</body>
</html>