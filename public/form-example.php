<?php
	
	$items = array('Item One', 'Item Two', 'Item Three');
	if (isset($_POST['newitem'])) {
		$_POST['newitem'] = htmlspecialchars(strip_tags($_POST['newitem']));
	}
	$allItems = array_merge($items, $_POST);
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Alternative Syntax</title>
</head>
<body>
	<h1>List of Items</h1>
	<ul>
	<?php foreach ($allItems as $item): ?>
		<li><?php echo $item; ?></li>
	<?php endforeach; ?>
	</ul>

	<form method="POST" action="/form-example.php">
		<input type="text" id="newitem" name="newitem" placeholder="Add new todo item">
		<input type="submit" value="add">
	</form>
</body>
</html>