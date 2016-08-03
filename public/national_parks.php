<?php

require_once '../parks_constants.php';
require_once '../db_connect.php';

function pageController($dbc)
{
	$stmt = $dbc->query('SELECT * FROM national_parks')->fetchAll(PDO::FETCH_ASSOC);

	return [
		'stmt' => $stmt
	];
}

extract(pageController($dbc));

?>

<!DOCTYPE html>
<html>
<head>
	<title>National Parks</title>
</head>
<body>
	<h1>National Parks</h1>
	<table>
		<tr>
			<th>Name</th>
			<th>Location</th>
			<th>Date Est.</th>
			<th>Area (acres)</th>
		</tr>
		<?php foreach ($stmt as $park): ?>
			<tr>
				<td><?= $park['name']; ?></td>
				<td><?= $park['location']; ?></td>
				<td><?= $park['date_established']; ?></td>
				<td><?= $park['area_in_acres']; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>