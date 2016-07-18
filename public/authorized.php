<?php

function pageController()
{
	session_start();
	$username = $_SESSION['logged_in_user'];

	if ($username != 'guest') {
		header('Location: login.php');
	} else {
		$message = "Welcome, {$username}.";
	}
	
	return [
		'message' => $message
		];
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
	<title>Authorized</title>
</head>
<body>
	<h1>Authorized</h1>
	<p><?= $message; ?></p>
</body>
</html>