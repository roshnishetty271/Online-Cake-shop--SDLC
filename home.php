<?php
require "user_connect.php";

$sql1="UPDATE `registered` SET Session='No' WHERE  1"; 
$result = mySQLi_query($conn,$sql1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CakeShop</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

<link rel="stylesheet" type="text/css" href="styles.css" >
<script type="text/javascript" src="engine1/jquery.js"></script>
<style>
.navbar{
background-color:#1C2833    ;

}
.nav navbar-nav{
color:red;
}
.bod{
background-color:pink;
}
.cakesImg {
border: 16 px  green;
border-radius: 9 px;
}
div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 250px;
	height : 400px;
	background-color : pink;
	padding-right:20px;
	}
div.gallery:hover {
    border: 1px solid #777;
}

</style>

</head>
<body>
<div class="header-content">
<center>
<img src="logo1.jpg">
</img>
</center>
</div>
<div class="navbar navbar-inverse navbar-fixed">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="about_us.html">About us</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">

      <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="user.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</div>


<div id="slides" class="carousel slide" data-ride="carousel">
<ol class ="carousel-indicators">
<li data-target="#slides" data-slide-to="0" class="active"></li>
<li data-target="#slides" data-slide-to="1" ></li>
<li data-target="#slides" data-slide-to="2" ></li>
</ol>

<div class="carousel-inner" >
	<div class="item active" id="slide1">
	<img src="ss4.jpg">
	</div>

	<div class="item " id="slide2">
		<img src="ss2.jpg">

	</div>

	<div class="item" id="slide3">
		<img src="ss3.jpg">

	</div>

</div>
<a class="left carousel-control" href="#slides"  data-slide="prev" role="button"><span class="icon-prev"></span></a>
<a class="right carousel-control" href="#slides" data-slide="next" role="button"><span class="icon-next"></span></a>

</div>  <!...........End Slider...........!>
<div class="bod" >
</br>

<hr>

<center>
<h4>Cakes</h4>
</center>
<div class="gallery">
<img src="c1.jpg">
<div class="desc">
<h4 style="color:black">Caramel Crunch Delicious </h3>
<h4 style="color:black">1 kg</h3>
<h3 style="color:red">Rs.800</h2>


</br>
</div>
</div>

<div class="gallery">
<img src="c2.jpg">
<div class="desc">
<h4 style="color:black">Chocolate Belgian Cake</h3>

<h4 style="color:black">1 kg</h3>
<h3 style="color:red">Rs.1500</h2>
</br>
</div>
</div>

<div class="gallery">
<img src="c3.jpg">
<div class="desc">
<h4 style="color:black">Chocolate  Mars Mousse </h3>

<h4 style="color:black">1 kg</h3>
<h3 style="color:red">Rs.2500</h2>

</br>
</div>
</div>

<div class="gallery">
<img src="c4.jpg">
<div class="desc">
<h4 style="color:black"> Delicious Chocolate Mousse </h3>
<h4 style="color:black">1.5 kg</h3>
<h3 style="color:red">Rs.3000</h2>

</br>
</div>
</div>

<div class="gallery">
<img src="c2.jpg">
<div class="desc">
<h4 style="color:black">Delicious Carrot Cake</h3>

<h4 style="color:black">1 kg</h3>
<h3 style="color:red">Rs.900</h2>

</br>
</div>
</div>

</div>
</body>
</html>
