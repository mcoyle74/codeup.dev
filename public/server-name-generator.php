<?php

$adjectives = ['sneaky', 'sleepy', 'happy', 'bashful', 'simple', 'grumpy', 'plain', 'hidden', 'smooth', 'lone'];
$nouns = ['dog', 'duck', 'blanket', 'foot', 'fur', 'rain', 'fish', 'hand', 'squirrel', 'notebook'];

function getRandomElementFromArray($array) {
	$random = mt_rand(0, (count($array) - 1));
	return $array[$random];
}

function createServerNameString($array1, $array2) {
	$variable1 = getRandomElementFromArray($array1);
	$variable2 = getRandomElementFromArray($array2);
	return $serverName = "{$variable1}-{$variable2}";
}

$name = createServerNameString($adjectives, $nouns);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Server Name Generator</title>
	<style type="text/css">
		body {
			background-color: #333;
			color: #00bf57;
			font-family: "Lucida Console", Monaco, monospace;
		}
		p {
			font-size: 1.5em;
		}
	</style>
</head>
<body>
	<h1>Server Name Generator</h1>
	<p>Your server name is <?php echo $name; ?>.</p>
</body>
</html>