<?php

function pageController()
{
	$data = [];
	$favoriteThings	= ['family', 'learning', 'art', 'movies', 'games', 'food'];
	$data['favorites'] = $favoriteThings;
	return $data;
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<title>My Favorite Things</title>

	<style type="text/css">
		body {
			background-color: #fffcf0;
			color: #804000;
		}

		table {
			background-color: #fff;
			font-size: 1.25em;
		}

		.table-striped>tbody>tr:nth-of-type(odd) {
			background-color: #f8f5ea;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Michael's Favorite Things</h1>
		<table class="table table-striped">
			<tr>
				<th>Favorite Things:</th>
			</tr>
			<?php foreach ($favorites as $thing): ?>
			<tr>
				<td>
					<?= $thing; ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
	</div>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>