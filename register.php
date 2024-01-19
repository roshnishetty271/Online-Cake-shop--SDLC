<?php

require "register_connect.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>User</title>




<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

<link rel="stylesheet" type="text/css" href="global.css" >
 

</head>

<body>
	<div class="container-fluid bg">
	<div class="row">
		<div class="col-md-4 col-sm-4 col-xs-12"></div>
		<div class="col-md-4 col-sm-4 col-xs-12">
		<!....Form start......!>
		
		<form class="fc" action="register_insert.php" method="POST">
		<div class="form-group" >
		<label for="exampleInputFname1">First name</label>
			<input type="text" class="form-control" id="Fname"  name="Fname" placeholder="Fname" required>
		</div>
		<div class="form-group" >
		<label for="exampleInputLname1">Last Name</label>
			<input type="text" class="form-control" id="Lname"  name="Lname" placeholder="Lname" required>
		</div>
		<div class="form-group" >
			<label for="exampleInputEmail1">E-mail</label>
			<input type="email" class="form-control" id="Uname"  name="Uname" placeholder="Username" required>
		</div>
		<div class="form-group" >
		<label for="exampleInputAddr1">Address</label>
			<input type="textarea " class="form-control" id="Addr"  name="Addr" placeholder="Address" required>
		</div>
		<div class="form-group">
            <label for="inputMobileno">Mobile Number (format: xxxxxxxxxxx)</label>
            <input  type="int" pattern="^\d{10}$"  class="form-control" id="Mob"  name="Mob" placeholder="Mobile Number " required>
        </div>
		
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" id="Password"  name="Password" placeholder="Password" required>
		</div>
		
		<div class="checkbox">
			<label>
			<input type="checkbox"> Remember me
			</label>
		</div>
		<button type="submit" class="btn btn-info btn-block"  >Sign in</button>
		</form>
		
		<!..........Form End.....!>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-12"></div>
	</div>
	</div>
</body>
</html>
