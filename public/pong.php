<?php

function pageController()
{
	$data = [];

	if (isset($_GET['counter'])) {
		$counter = $_GET['counter'];
	} else {
		$counter = 0;
	}

	$data['counter'] = $counter;

	return $data;
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
	<title>Pong</title>
</head>
<body>
	<h1>Pong</h1>
	<h2>count = <?= $counter ?></h2>
	<a href="ping.php?counter=<?= $counter + 1; ?>">hit</a>
	<a href="ping.php?counter=0">miss</a>
</body>
</html>