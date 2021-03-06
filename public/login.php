<?php

require_once 'functions.php';
require_once '../Auth.php';
require_once '../src/Input.php';


function pageController()
{
	session_start();
	$fail = '';
	$class = 'hidden';
	// if (Auth::check() && Auth::user() == 'guest') {
	// 	header('Location: authorized.php');
	// 	exit(0);
	// }
	if ($_POST) {
		$username = Input::has('username') ? Input::get('username') : '';
		$password = Input::has('password') ? Input::get('password') : '';
		if (Auth::attempt($username, $password)) {
			header('Location: authorized.php');
			exit(0);
		} else {
			$fail = 'Sorry, you have entered an invalid username or password.';
			$class = 'alert alert-danger';
		}
	}

	return [
		'username' => 'guest',
		'password' => 'password',
		'fail' => $fail,
		'class' => $class
	];
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/site.css">
</head>
<body>
	<div class="container">
		<div id="form-head">
			<h2>Login: </h2>
		</div>
		<div id="form-body">
			<form method="POST" action="/login.php" role="form">
				<div class="form-group">
					<label for="usernumber">Username: </label>
					<input id="username" name="username" type="text" placeholder="Enter username." autofocus>
				</div>
				<div class="form-group">
					<label for="password">Password: </label>
					<input id="password" name="password" type="password" placeholder="Enter password.">
				</div>
				<button class="btn btn-primary" type="submit" id="button-login"> <span class="glyphicon glyphicon-log-in"></span> Login </button>
				<div class="checkbox">
					<label for="remember"><input id="remember" name="remember" type="checkbox" checked>Remember me?</label>
				</div>
			</form>
		</div>
		<div class=<?= '"' . $class . '"'; ?> id="alert" role="alert">
			<?= $fail ?>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>