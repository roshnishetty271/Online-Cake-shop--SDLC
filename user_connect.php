<?php
$server="localhost"; //mysql server
$uname="root";
$password="";
$dbname="user";
//Connect to mysql server and database
$conn=new mysqli($server,$uname,$password,$dbname);
if($conn->connect_error)
{
die("Connection failed :".$conn->connect_error);
}
//else
	//echo"Connection success";
?>