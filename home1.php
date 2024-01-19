<?php
session_start();
require "user_connect.php";

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


<script type="text/javascript" src="engine1/jquery.js"></script>




<style>
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

.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  cursor: pointer;
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.show {
  display: block;
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
    
    <div class="nav navbar-nav">
      <a href="#">Home</a>
      <a href="about_us.html">About us</a>
      <a href="contact.php">Contact</a>
	 <div class="dropdown">
  <button class="dropbtn" onclick="myFunction()">Dropdown
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="myDropdown">
    <a href="choc.html">Chocolate Cake</a>
    <a href="cup.html">Cup Cake</a>
    <a href="regular.html">Regular Cake</a>
	<a href="photo.html">Photo Cake</a>
  </div>
  </div> 
 
    </div>
	
	
	<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>

	
	
    <ul class="nav navbar-nav navbar-right">
	      <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>

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
<h4>New Arrivals</h4>
</center>
<div class="gallery">
<img src="c1.jpg">
<div class="desc">
<h4 style="color:black">Caramel Crunch Delicious </h3>
<h4 style="color:black">1 kg</h3>
<h3 style="color:red">Rs.800</h2>
</div>
<form action="b1.php" method="post">
  
  <div class="form-group">
			<label for="sel1">Quantity</label>
			<select class="form-control" id="sel1" name="sel1">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				
			</select>
		</div>
</br>
</br>
<!---
  <center><button input type="submit" class="btn btn-warning" name="b1" ;>Add to cart</button></center>
-->
  
  </br>
</div>
</form>



<div class="gallery">
<img src="c2.jpg">
<div class="desc">
<h4 style="color:black">Chocolate Belgian Cake</h3>

<h4 style="color:black">1 kg</h3>
<h3 style="color:red">Rs.1500</h2>

</div>
<form action="b2.php" method="post">
  
  <div class="form-group">
			<label for="sel2">Quantity</label>
			<select class="form-control" id="sel2" name="sel2">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				
			</select>
		</div>
</br>
</br>
<!---
  <center><button input type="submit" class="btn btn-warning" name="b2" ;>Add to cart</button></center>
  --->
  
  </br>
</div>  
  </form>


<div class="gallery">
<img src="c3.jpg">
<div class="desc">
<h4 style="color:black">Chocolate  Mars Mousse </h3>

<h4 style="color:black">1 kg</h3>
<h3 style="color:red">Rs.2500</h2>

</br>
</div>
<form action="b3.php" method="post">
  
  <div class="form-group">
			<label for="sel3">Quantity</label>
			<select class="form-control" id="sel3" name="sel3">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				
			</select>
		</div>
</br>
</br>
<!---
  <center><button input type="submit" class="btn btn-warning" name="b3" ;>Add to cart</button></center>
-->
  
  </br>
  </div>
  
  </form>


<div class="gallery">
<img src="c4.jpg">
<div class="desc">
<h4 style="color:black"> Delicious Chocolate Mousse </h3>
<h4 style="color:black">1.5 kg</h3>
<h3 style="color:red">Rs.3000</h2>
</div>
<form action="b4.php" method="post">
  
  <div class="form-group">
			<label for="sel4">Quantity</label>
			<select class="form-control" id="sel4" name="sel4">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				
			</select>
		</div>
</br>
</br>

<!---
  <center><button input type="submit" class="btn btn-warning" name="b4" ;>Add to cart</button></center>
-->
  
  </br>
  </form>
</div>

<div class="gallery">
<img src="c2.jpg">
<div class="desc">
<h4 style="color:black">Delicious Carrot Cake</h3>

<h4 style="color:black">1 kg</h3>
<h3 style="color:red">Rs.900</h2>
</div>
<form action="b5.php" method="post">
  
  <div class="form-group">
			<label for="sel5">Quantity</label>
			<select class="form-control" id="sel5" name="sel5">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				
			</select>
		</div>
</br>
</br>
<!---
  <center><button input type="submit" class="btn btn-warning" name="b5" ;>Add to cart</button></center>
-->
  
  </br>
  </form>
</div>

</div>
<div>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<center>
<h4>TopSelling Cakes</h4>
</center>
<div class="gallery">
<img src="choc3.jpg">
<div class="desc">
<h4 style="color:black">Chocolate chips Kitkat cake </h3>
<h4 style="color:black">1 kg</h3>
<h3 style="color:red">Rs.720</h2>
</div>
<form action="b1.php" method="post">
  
  <div class="form-group">
			<label for="sel1">Quantity</label>
			<select class="form-control" id="sel1" name="sel1">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				
			</select>
		</div>
</br>
</br>
<!---
  <center><button input type="submit" class="btn btn-warning" name="b1" ;>Add to cart</button></center>
--->
  
  </br>
</div>
</form>



<div class="gallery">
<img src="p1.jpg" width="220" height="200">
<div class="desc">
<h4 style="color:black">Frozen Birthday Cake</h3>

<h4 style="color:black">1.5 kg</h3>
<h3 style="color:red">Rs.1000</h2>

</div>
<form action="b2.php" method="post">
  
  <div class="form-group">
			<label for="sel2">Quantity</label>
			<select class="form-control" id="sel2" name="sel2">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				
			</select>
		</div>
</br>
</br>
<!---
  <center><button input type="submit" class="btn btn-warning" name="b2" ;>Add to cart</button></center>
--->
  
  </br>
</div>  
  </form>


<div class="gallery">
<img src="p3.jpg" width="220" height="200">
<div class="desc">
<h4 style="color:black">Barbie Cake</h3>

<h4 style="color:black">3 kg</h3>
<h3 style="color:red">Rs.2800</h2>

</br>
</div>
<form action="b3.php" method="post">
  
  <div class="form-group">
			<label for="sel3">Quantity</label>
			<select class="form-control" id="sel3" name="sel3">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				
			</select>
		</div>
</br>
</br>
<!---
  <center><button input type="submit" class="btn btn-warning" name="b3" ;>Add to cart</button></center>
-->
  
  </br>
  </div>
  
  </form>


<div class="gallery">
<img src="choc4.jpg">
<div class="desc">
<h4 style="color:black"> Chocolate dripping Kitkat Cake </h3>
<h4 style="color:black">1 kg</h3>
<h3 style="color:red">Rs.620</h2>
</div>
<form action="b4.php" method="post">
  
  <div class="form-group">
			<label for="sel4">Quantity</label>
			<select class="form-control" id="sel4" name="sel4">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				
			</select>
		</div>
</br>
</br>
<!---
  <center><button input type="submit" class="btn btn-warning" name="b4" ;>Add to cart</button></center>
-->
  
  </br>
  </form>
</div>

<div class="gallery">
<img src="cup1.jpg">
<div class="desc">
<h4 style="color:black">Chocolate CupCake</h3>

<h4 style="color:black">1</h3>
<h3 style="color:red">Rs.25</h2>
</div>
<form action="b5.php" method="post">
  
  <div class="form-group">
			<label for="sel5">Quantity</label>
			<select class="form-control" id="sel5" name="sel5">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				
			</select>
		</div>
</br>
</br>
<!---
  <center><button input type="submit" class="btn btn-warning" name="b5" ;>Add to cart</button></center>
-->
  
  </br>
  </form>
</div>

</div>
<div>

<!----
<form action="del.php" method="post">
</br>
</br>
</br>
</br>
<center>
  <center><button input type="submit" class="btn btn-warning" name="b5" ;>Unsubscribe</button></center>
  </center>
</form>

---->
</div>  
</body>
</html>
