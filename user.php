<?php
// Start the session
session_start();
?>
<?php

require "user_connect.php";

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
		
		<form class="fc" action="user_direct.php" method="POST">
		<div class="form-group" >
			<label for="exampleInputEmail1">E-mail</label>
			<input type="text" class="form-control" id="Uname"  name="Uname" placeholder="Username">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" id="Password"  name="Password" placeholder="Password">
		</div>
		
		<div class="checkbox">
			<label>
			<input type="checkbox"> Remember me
			</label>
		</div>
		<button type="submit" class="btn btn-info btn-block"  >Sign in</button>
		</form>
		<p>
		<a href="register.php"> please click here</a>
		</p>
		<!..........Form End.....!>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-12"></div>
	</div>
	</div>
</body>
</html>
