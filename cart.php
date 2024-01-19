<?php
session_start();
require "user_connect.php";
?>
<html>
<head>
	<title>Displaying MySQL Data in HTML Table</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
						background-color: #f4fbff;

			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
			background-color: #f4fbff;

		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
			background-color: #f4fbff;

		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body background="light.jpg"   ,  background-attachment=" fixed",  background-repeat=" no-repeat";> 

	<h1></h1>
	<center>
		<caption class="title"><h1>Cart Items</h1> </caption>
	</center>

<?php
$Uname=$_SESSION["user"];


$flag=0;
$sql="SELECT * FROM cart " ;
 
$result=mySQLi_query($conn,$sql);
echo"<div class='gallery'>";

if($result->num_rows>0 )
{
while($row=mySQLi_fetch_row($result))
{
	if($row[0]==$Uname)
{
if($row[1]=="Chocolate Belgian Cake")
{
echo"<h4 style='color:black'>".$row[1]." </h3>
<h4 style='color:black'>Quantity:".$row[2] ."</h3>
<h3 style='color:red'>Price:".$row[3]."</h2>";
echo"<form action='del2.php'>
		</br>
		</br>
  <button input type='submit' class='btn btn-warning' name='b2' ;>Delete</button>
</form>";
}

else if($row[1]=="Caramel Crunch Delicious")
{
echo"<h4 style='color:black'>".$row[1]." </h3>
<h4 style='color:black'>Quantity:".$row[2] ."</h3>
<h3 style='color:red'>Price:".$row[3]."</h2>";
echo"<form action='del1.php'>
		</br>
		</br>
  <button input type='submit' class='btn btn-warning' name='b1' ;>Delete</button>
</form>";
}

else if($row[1]=="Chocolate Mars Mousse")
{
echo"<h4 style='color:black'>".$row[1]." </h3>
<h4 style='color:black'>Quantity:".$row[2] ."</h3>
<h3 style='color:red'>Price:".$row[3]."</h2>";
echo"<form action='del3.php'>
		</br>
		</br>
  <button input type='submit' class='btn btn-warning' name='b3' ;>Delete</button>
</form>";
}

else if($row[1]=="Delicious Chocolate Mousse")
{
echo"<h4 style='color:black'>".$row[1]." </h3>
<h4 style='color:black'>Quantity:".$row[2] ."</h3>
<h3 style='color:red'>Price:".$row[3]."</h2>";
echo"<form action='del4.php'>
		</br>
		</br>
  <button input type='submit' class='btn btn-warning' name='b4' ;>Delete</button>
</form>";
}

else
{
echo"<h4 style='color:black'>".$row[1]." </h3>
<h4 style='color:black'>Quantity:".$row[2] ."</h3>
<h3 style='color:red'>Price:".$row[3]."</h2>";
echo"<form action='del5.php'>
		</br>
		</br>
  <button input type='submit' class='btn btn-warning' name='b5' ;>Delete</button>
</form>";
}

	

}
}
echo"<div>
		<form action='done.php'>
		</br>
		</br>
  <center><button input type='submit' class='btn btn-warning' name='b11' ;>Proceed to checkout</button></center>
</form>
</div>";

}
else
	echo"</br></br></br></br></br></br></br></br></br><center><h2>No items in cart</h2></center>"


?>

</body>
</html>