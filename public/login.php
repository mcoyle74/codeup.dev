<?php



?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>

<body>
	<form method="POST" action="/login.php">
		<label for="username">Username: </label>
		<input id="username" name="username" type="text">
		<label for="password">Password: </label>
		<input id="password" name="password" type="password">
		<button type="submit">Submit</button>
	</form>
</body>
</html>