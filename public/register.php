<?php
	// var_dump($_GET);
	// var_dump($_POST);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<style type="text/css">
		body {
			font-family: 'Montserrat', sans-serif;
			background-color: #d6dad6;
			padding-top: 10px;
		}
		.navbar-brand {
			padding: 0 10px 0 0;
			position: relative;
			top: -7px;
		}
		.container-fluid {
			padding-left: 10%;
			padding-right: 10%;
		}
		a:hover {
			transform: scale(1.1);
		}	
		#resume:hover {
			color: #ff0c0c;
		}
		#portfolio:hover {
			color: #bc79ff;
		}
		#contact:hover {
			color: #4d88ff;
		}
		img.profile-pic {
			width: 33%;
			max-width: 350px;
			margin: 20px 5% 5% 5%;
			border-radius: 10%;
			float: right;
		}
	</style>
</head>

<body>
	<nav class="container-fluid navbar navbar-inverse navbar-collapse navbar-static-top">
			<a class="navbar-brand" href="/welcome.php"><img id="brand" src="/img/4-ball-green.png" height="70"></a>
		<ul class="nav navbar-nav">
			<li><a href="/resume.html" id="resume">Resume</a></li>
			<li><a href="portfolio.php" id="portfolio">Portfolio</a></li>
			<li><a href="/contact.php" id="contact">Contact</a></li>
			<li><a href="/login.php" id="login">Sign in</a></li>
		</ul>
	</nav>
	<h2>Registration</h2>
	<div class="container-fluid">
		<form method="POST" action="/register.php" role="form">
			<div class="form-group">
				<label for="username">Username</label>
				<input id="username" name="username" type="text">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input id="email" name="email" type="text">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input id="password" name="password" type="password">
			</div>
			<div class="form-group">
				<button type="submit">Submit</button>
			</div>
		</form>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</body>
</html>