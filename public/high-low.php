<?php

function pageController()
{
	session_start();

	function clearSession()
	{
		unset($_POST);
		session_unset();
		session_regenerate_id(true);
	}
 
	$min = 1;
	$max = 100;
	$win = '';
	$pclass = '';

	$count = (isset($_SESSION['count'])) ? $_SESSION['count'] :	0;

	$random = (isset($_SESSION['random'])) ? $_SESSION['random'] : $_SESSION['random'] = mt_rand($min, $max);

	if ($_POST) {
		$guess = $_POST['guess'];
		if ($guess < $random) {
			$message = 'My number is higher. Please guess again.';
			$_SESSION['count'] += 1;
		} elseif ($guess > $random) {
			$message = 'My number is lower. Please guess again.';
			$_SESSION['count'] += 1;
		} else {
			$message = 'You guessed my number!';
			$count = 0;
			$win = $message;
			clearSession();
		}
	} else {
		$guess = '';
		$count = 0;
		$message = '';
		$pclass = '';
	}

	if ($count > 0) {
		$pclass = 'hidden';
		if ($win == '') {
			$alertClass = '"alert alert-info"';
		} elseif ($win == $message) {
			$alertClass = '"alert alert-success"';
		}
	} else {
		$alertClass = '"hidden"';
	}

	echo "Random number is '{$random}'." . '<br>';
	echo "Current guess is '{$guess}'." . '<br>';
	echo "Message is '{$message}'." . '<br>';
	echo "Count is '{$count}'." . '<br>';

	return [
		'min' => $min,
		'max' => $max,
		'guess' => $guess,
		'count' => $count,
		'message' => $message,
		'alertClass' => $alertClass,
		'pclass' => $pclass
	];
	
}

extract(pageController());

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link
			rel="stylesheet"
			href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
			integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
			crossorigin="anonymous"
		>
		<title>High-Low game</title>

		<style type="text/css">
			.hidden {
				display: none;
			}
		</style>
		<!--[if lt IE 9]>
			  <script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
			  </script>
			  <script src="http://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js">
			  </script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<header class="page-header">
				<h1>High-Low Game</h1>
			</header>
			<p class=<?= '"' . $pclass . '"'; ?>>I have chosen a number from <?= $min ?> to <?= $max ?>. Try to guess my number.</p>
			<!-- Switch the class from info to success when the user win -->
			<div class=<?= $alertClass ?> role="alert">
				<p>
					Your last guess was <?= $guess ?>.<br>
					<?= $message ?><br>
					Guess count: <?= $count ?>
				</p>
			</div>
			<form method="post">
				<div class="form-group">
					<label for="guess">Guess</label>
					<input
						type="number"
						class="form-control"
						name="guess"
						id="guess"
						autofocus>
				</div>
				<button type="submit" class="btn btn-primary">
					Guess
				</button>
			</form>
		</div>
		<script
			src="https://code.jquery.com/jquery-2.2.4.min.js"
			integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
			crossorigin="anonymous"
		></script>
		<script
			src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
			integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
			crossorigin="anonymous"
		></script>
		
	</body>
</html>