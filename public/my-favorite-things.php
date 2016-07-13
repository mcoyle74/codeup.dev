<?php 

$favoriteThings	= ['family', 'learning', 'art', 'movies', 'games', 'food'];

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<title>My Favorite Things</title>

	<style type="text/css">
		body {
			background-color: #f0f0f0;
		}

		table {
			background-color: #f8f8f8;
		}

		.table-striped>tbody>tr:nth-of-type(odd) {
			background-color: #e8f8e8;
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
			<?php foreach ($favoriteThings as $thing): ?>
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