<?php 

$favoriteThings	= ['family', 'learning', 'art', 'movies', 'games', 'food'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>My Favorite Things</title>
</head>
<body>
	<h1>Michael's Favorite Things</h1>
	<table>
		<tr>
			<th>Favorite Things:</th>
		</tr>
		<?php foreach ($favoriteThings as $thing) { ?>
		<tr>
			<td>
				<?php echo $thing; ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>