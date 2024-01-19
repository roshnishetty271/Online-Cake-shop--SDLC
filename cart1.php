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
<body background="back.jpg" bgproperties="fixed"> 

	<h1></h1>
	<table class="data-table">
		<caption class="title"><strong>Cart Items</strong> </caption>
		<thead>
			<tr>
				
				
				<th>Item</th>
				<th>Quantity</th>
				<th>Price</th>
				
			</tr>
		</thead>
		<tbody>
		

<?php
$Uname=$_SESSION["user"];

$flag=0;
$sql="SELECT * FROM cart " ;
 
$result=mySQLi_query($conn,$sql);

if($result->num_rows>0 )
{
while($row=mySQLi_fetch_row($result))
{
	if($row[0]==$Uname)
{


	echo"<tr>
	
	<td> ".$row[1]."</td>
	<td> ".$row[2]."</td>
	<td>".$row[3]."</td>

	
	</tr>";


}
}
}
?>
</tbody>
</table>
<div>
<form action="done.php">
</br>
</br>
  <center><button input type="submit" class="btn btn-warning" name="b1" ;>Proceed to checkout</button></center>
</form>
</div>


