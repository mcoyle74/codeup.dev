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
	<title>Ping</title>
</head>
<body>
	<h1>Ping</h1>
	<h2>count = <?= $counter ?></h2>
	<a href="pong.php?counter=<?= $counter + 1; ?>">hit</a>
	<a href="pong.php?counter=0">miss</a>
</body>
</html>