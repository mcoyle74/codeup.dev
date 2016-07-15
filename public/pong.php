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
	<style type="text/css">
		div.pseudo-button {
			height: 80px;
			width: 80px;
			background-color: #0057bf;
			color: #fff;
			border-radius: 50%;
			text-align: center;
			line-height: 75px;
			margin-bottom: 10px;
		}

		#miss {
			background-color: #cf0000;
		}

		a {
			text-decoration: none;
		}
	</style>
</head>
<body>
	<h1>Pong</h1>
	<h2>count = <?= $counter ?></h2>
	<a href="ping.php?counter=<?= $counter + 1; ?>"><div class="pseudo-button">hit</div></a>
	<a href="ping.php?counter=0"><div class="pseudo-button" id="miss">miss</div></a>
</body>
</html>