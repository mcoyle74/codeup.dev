<?php

require_once '../Auth.php';

function pageController()
{
	session_start();
	// $username = 'guest';
	$username = Auth::user();

	if ($username != 'guest') {
		var_dump($username);
		exit(0);
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
	<a href="logout.php">Log off</a>
</body>
</html>