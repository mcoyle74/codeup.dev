<?php

require_once 'functions.php';

function pageController()
{
	$data = [];

	if (inputHas('counter') {
		$counter = inputGet('counter');
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
	<style type="text/css">
		div.pseudo-button {
			height: 80px;
			width: 80px;
			background-color: #00bf57;
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
	<h1>Ping</h1>
	<h2>count = <?= $counter ?></h2>
	<a href="pong.php?counter=<?= $counter + 1; ?>"><div class="pseudo-button">hit</div></a>
	<a href="ping.php?counter=0"><div class="pseudo-button" id="miss">miss</div></a>
</body>
</html>