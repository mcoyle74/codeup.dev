<?php

require_once '../parks_constants.php';
require_once '../db_connect.php';
require_once '../src/Input.php';

function pageController($dbc)
{
	$title = 'National Parks';

	$page = Input::get('page') < 1 ? 1 : Input::get('page', 1);
	$limit = 4;
	$offset = ($page - 1) * $limit;

	$stmt = $dbc->prepare('SELECT * FROM national_parks LIMIT :limit OFFSET :offset');

	$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
	$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);

	$stmt->execute();

	$errors = [];
	$error_class = '';
	if (Input::isPost()) {
		try {
			$name = Input::getString('name');
		} catch (Exception $e) {
			$errors[] = 'Error occurred in Name: ' . $e->getMessage();
		}
		try {
			$location = Input::getString('location');
		} catch (Exception $e) {
			$errors[] = 'Error occurred in Location: ' . $e->getMessage();
		}
		try {
			$date_established = Input::getString('date_established');
		} catch (Exception $e) {
			$errors[] = 'Error occurred in Date Est: ' . $e->getMessage();
		}
		try {
			$area_in_acres = Input::getNumber('area_in_acres');
		} catch (Exception $e) {
			$errors['area'] = 'Error occurred in Area: ' . $e->getMessage();
		}
		try {
			$description = Input::getString('description');
		} catch (Exception $e) {
			$errors[] = 'Error occurred in Description: ' . $e->getMessage();
		}

		if (empty($errors)) {
			$insert = 'INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)';
			$statement = $dbc->prepare($insert);
			$statement->bindValue(':name', $name, PDO::PARAM_STR);
			$statement->bindValue(':location', $location, PDO::PARAM_STR);
			$statement->bindValue(':date_established', $date_established, PDO::PARAM_STR);
			$statement->bindValue(':area_in_acres', $area_in_acres, PDO::PARAM_STR);
			$statement->bindValue(':description', $description, PDO::PARAM_STR);
			$statement->execute();
		} else {
			$error_class = 'alert alert-danger';
		}
	}

	return [
		'title' => $title,
		'stmt' => $stmt,
		'page' => $page,
		'error_class' => $error_class,
		'errors' => $errors
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
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Name</th>
					<th>Location</th>
					<th>Date Est.</th>
					<th>Area (acres)</th>
					<th>Description</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($stmt as $park): ?>
				<tr>
					<td><?= $park['name']; ?></td>
					<td><?= $park['location']; ?></td>
					<td><?= $park['date_established']; ?></td>
					<td><?= $park['area_in_acres']; ?></td>
					<td><?= $park['description']; ?></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
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
		<div class="<?= $error_class; ?>">
			<?php foreach ($errors as $error): ?>
				<?= $error; ?>
			<?php endforeach; ?>
		</div>
		<form method="POST">
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" name="name" value="<?= (!empty($errors)) ? Input::get('name') : '' ?>" placeholder="Name">
			</div>
			<div class="form-group">
				<label for="location">Location</label>
				<input type="text" class="form-control" name="location" value="<?= (!empty($errors)) ? Input::get('location') : ''; ?>" placeholder="State">
			</div>
			<div class="form-group">
				<label for="date_established">Date Est.</label>
				<input type="text" class="form-control" name="date_established" value="<?= (!empty($errors)) ? Input::get('name') : ''; ?>" placeholder="yyyy-mm-dd">
			</div>
			<div class="form-group">
				<label for="area_in_acres">Area (acres)</label>
				<input type="text" class="form-control" name="area_in_acres" value="<?= (!empty($errors)) ? Input::get('area_in_acres') : ''; ?>" placeholder="12345">
			</div>
			<div class="form-group">
				<label for="description">Description</label>
				<input type="text" class="form-control" name="description" value="<?= (!empty($errors)) ? Input::get('desciption') : ''; ?>" placeholder="Describe the park.">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>

	<?php require_once '../partials/scripts.phtml'; ?>
</body>
</html>