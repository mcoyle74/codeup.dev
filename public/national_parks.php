<?php

require_once '../parks_constants.php';
require_once '../db_connect.php';
require_once '../src/Input.php';

function pageController($dbc)
{
	$title = 'National Parks';

	$query = 'SELECT * FROM national_parks';
	$limit = 4;
	$page = Input::get('page') < 1 ? 1 : Input::get('page', 1);
	$offset = ($page - 1) * $limit;
	$query .= " LIMIT $limit OFFSET $offset";

	$parks = $dbc->query($query)->fetchAll(PDO::FETCH_ASSOC);

	return [
		'title' => $title,
		'parks' => $parks,
		'page' => $page
	];
}

extract(pageController($dbc));

?>

<!DOCTYPE html>
<html>
<head>
	<?php require_once '../partials/head.phtml'; ?>
</head>
<body>
	<div class ="container">
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
		<nav aria-label="Page navigation">
			<ul class="pagination">
				<?php if ($page > 1): ?>
					<li>
						<a href="national_parks.php?page=<?= $page - 1; ?>" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a>
					</li>
				<?php endif; ?>
	
				<?php for ($i = 1; $i <= 15; $i++): ?>
					<li><a href="national_parks.php?page=<?= $i; ?>"><?= $i; ?></a></li>
				<?php endfor; ?>
	
				<?php if ($page < 15): ?>
					<li>
						<a href="national_parks.php?page=<?= $page + 1; ?>" aria-label="Next"><span aria-hidden="true">&raquo;</span></a>
					</li>
				<?php endif; ?>
			</ul>
		</nav>
	</div>

	<?php require_once '../partials/scripts.phtml'; ?>
</body>
</html>