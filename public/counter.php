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
</head>
<body>
	<h1>counter = <?= $counter ?></h1>
	<a href="?counter=<?= $counter + 1; ?>">up</a>
	<a href="?counter=<?= $counter - 1; ?>">down</a>
</body>
</html>