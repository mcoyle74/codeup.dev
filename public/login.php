<?php

if ($_POST) {
	$username = isset($_POST['username']) ? $_POST['username'] : '';
	$password = isset($_POST['password']) ? $_POST['password'] : '';
	if (($username == 'guest') && ($password == 'password')) {
		header('Location: authorized.php');
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>

<body>
	<form method="POST" action="/login.php">
		<label for="usernumber">Username: </label>
		<input id="username" name="username" type="text">
		<label for="password">Password: </label>
		<input id="password" name="password" type="password">
		<button type="submit">Submit</button>
	</form>
	<p><?= 'Sorry, username or password not valid.' ?></p>
</body>
</html>