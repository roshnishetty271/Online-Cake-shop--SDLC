
<?php
require "user_connect.php";
session_start();
$name=$_SESSION["user"];
//echo $Fname;
$sql1="DELETE  FROM `cart` where Uname='$name'  ";
$result=mySQLi_query($conn,$sql1);
 
?>
<html>
<body background="light.jpg">
<p style=" font-family:Lucida Calligraphy;font-size:3 vw;" >
<center>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<h2>
Purchased  items will be delivered  shortly..</br>
Thank you for visiting our page!!!!!!!!!!!
</h2>
</center>
</p>
</body>

</html>