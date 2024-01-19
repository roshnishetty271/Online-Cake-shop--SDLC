
<?php
// Start the session
session_start();
?>
<?php
require "user_connect.php";
//echo"I am inside";
//require "home1.php";
//$_SESSION["user"]
$Uname=$_SESSION["user"];
$Quantity=$_POST["sel4"];
$price=3000*($Quantity);
//$Addr=$_POST["Addr"];
//echo $Fname;

$sql="INSERT INTO `cart`(`Uname`,`Name`, `Quantity`, `Price`) VALUES ('$Uname','Delicious  Chocolate Mars Mousse',$Quantity,$price)";
$result=mySQLi_query($conn,$sql);
 if ($result)
	echo"</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br><center>Item added to cart successfuly</center>";
?>

<html>
<body background="light.jpg">
</body>
</html>

