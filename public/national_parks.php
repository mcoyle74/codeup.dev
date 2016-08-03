<?php

require_once '../parks_constants.php';
require_once '../db_connect.php';
require_once '../src/Input.php';

function pageController($dbc)
{
	$query = 'SELECT * FROM national_parks';
	$limit = 4;
	$page = Input::get('page') < 1 ? 1 : Input::get('page', 1);
	$offset = ($page - 1) * $limit;
	$query .= " LIMIT $limit OFFSET $offset";

	$parks = $dbc->query($query)->fetchAll(PDO::FETCH_ASSOC);

	return [
		'parks' => $parks
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
		<?php foreach ($parks as $park): ?>
			<tr>
				<td><?= $park['name']; ?></td>
				<td><?= $park['location']; ?></td>
				<td><?= $park['date_established']; ?></td>
				<td><?= $park['area_in_acres']; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
	<?php for ($i = 1; $i <= 15; $i++): ?>
		<a href="national_parks.php?page=<?= $i; ?>"><?= $i; ?></a>
	<?php endfor; ?>
</body>
</html>