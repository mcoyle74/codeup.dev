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
	var_dump($_GET);
	return $data;
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
	<title>Counter</title>
	<style type="text/css">
		div.pseudo-button {
			height: 50px;
			width: 100px;
			background-color: #0057bf;
			color: #fff;
			border-radius: 10px;
			text-align: center;
			line-height: 45px;
			margin-bottom: 10px;
		}

		a {
			text-decoration: none;
		}
	</style>
</head>
<body>
	<h1>counter = <?= $counter ?></h1>
	<a href="counter.php?counter=<?= $counter + 1; ?>"><div class="pseudo-button">up</div></a>
	<a href="counter.php?counter=<?= $counter - 1; ?>"><div class="pseudo-button">down</div></a>
</body>
</html>