<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Portfolio</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<style type="text/css">
		body {
			font-family: 'Montserrat', sans-serif;
			background-color: #d6dad6;
			padding-top: 10px;
		}
		h1 {
			padding-bottom: 50px;
			transform: perspective(0, 10deg);
		}
		.navbar-brand {
			padding: 0 10px 0 0;
			position: relative;
			top: -7px;
		}
		.container-fluid {
			padding-left: 10%;
			padding-right: 10%;
		}
		a:hover {
			transform: scale(1.1);
		} 
		#resume:hover {
			color: #ff0c0c;
		}
		#portfolio:hover {
			color: #bc79ff;
		}
		#contact:hover {
			color: #4d88ff;
		}
		img.img-web-thumb {
			width: 25%;
			max-width: 200px;
			margin-bottom: 7%;
			margin-left: 7%;
			float: left;
			transform: rotate3d(0, 1, 0, 30deg);
			box-shadow: -20px 20px 30px;
		}
		#img-1 {
			margin-left: 0;
		}
		.perspective {
			perspective: 1200px;
		}
	</style>
</head>

<body>
	<nav class="container-fluid navbar navbar-inverse navbar-static-top">
		<a class="navbar-brand" href="/welcome.php"><img id="brand" src="/img/4-ball-green.png" height="70" alt="Green billiard ball"></a>
		<ul class="nav navbar-nav navbar-left">
			<li><a href="/resume.html" id="resume">Resume</a></li>
			<li><a href="portfolio.php" id="portfolio">Portfolio</a></li>
			<li><a href="/contact.php" id="contact">Contact</a></li>
			<li><a href="/login.php" id="login">Sign in</a></li>
		</ul>
	</nav>
	<div class="container">
		<h1>Portfolio</h1>
	</div>
	<div class="container perspective">
		<img src="/img/code-style.png" class="img-web-thumb" id="img-1" alt="web page screen shot">
		<img src="/img/flag-texas.png" class="img-web-thumb" id="img-2" alt="web page screen shot">
		<img src="/img/position.png" class="img-web-thumb" id="img-3" alt="web page screen shot">
		<img src="/img/position2.png" class="img-web-thumb" id="img-4" alt="web page screen shot">
		<img src="/img/img_1373.jpg" class="img-web-thumb" id="img-5" alt="Michael Coyle Profile Picture">
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>