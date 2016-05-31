<?php
	var_dump($_GET);
	var_dump($_POST);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>My First HTML Form</title>
	</head>
	<body>
		<h3>User Login</h3>
		<form method="POST" action="/my_first_form.php">
			<div>
				<label for="username">Username</label>
				<input id="username" name="username" type="text" placeholder="YourUserName">
			</div>
			<div>
				<label for="password">Password</label>
				<input id="password" name="password" type="password" placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;">
			</div>
			<div>
				<button type="submit">Login</button>	
			</div>
		<h3>Compose an Email</h3>
		</form>
		<form method="POST" action="/my_first_form.php">
			<div>
				<label>To: </label>
				<input id="to" name="to" type="text">
			</div>
			<div>
				<label>From: </label>
				<input id="from" name="from" type="text">
			</div>
			<div>
				<label>Subject: </label>
				<input id="subject" name="subject" type="text">
			</div>
			<textarea id="email_body" name="email_body" rows="5" cols="40"></textarea>
			<div>
				<label><input type="checkbox" id="sent_folder" name="sent_folder" value="yes" checked>Save a copy to your sent folder?</label>
				<button type="submit">Send</button>
			</div>
		</form>
		<h3>Multiple Choice Quiz</h3>
			<form method="POST" action="/my_first_form.php">
				<p>1. What is your name?</p>
				<div>
					<label><input type="radio" name="q1" value="Arthur">Arthur</label>
					<label><input type="radio" name="q1" value="Michael">Michael</label>
					<label><input type="radio" name="q1" value="Bubbles">Bubbles</label>
				</div>
				<p>2. What is your quest?</p>
				<div>
					<label><input type="radio" name="q2" value="Holy Grail">Holy Grail</label>
					<label><input type="radio" name="q2" value="Learn to code">Learn to code</label>
					<label><input type="radio" name="q2" value="Solve Scooby Do-style mysteries">Solve Scooby-Do-style mysteries</label>
				</div>
				<p>3. What is the air-speed velocity of an unladen swallow?</p>
				<div>
					<label><input type="radio" name="q3" value="24mph">24mph</label>
					<label><input type="radio" name="q3" value="Is that an African or European swallow?">Is that an African or European swallow?</label>
					<label><input type="radio" name="q3" value="idk">Huh? I don't know that</label>
				</div>
				<p>4. Which of the following describes you (ckeck all that apply)?</p>
				<div>
					<label><input type="checkbox" name="q4[]" value="handsome">handsome</label>
					<label><input type="checkbox" name="q4[]" value="intelligent">intelligent</label>
					<label><input type="checkbox" name="q4[]" value="sophisticated">sophisticated</label>
					<div>
							<button type="submit">Submit</button>
					</div>
				</div>
			</form>
			<label for="tranny">Select your transmission type: </label>
			<select id="tranny" name="tranny">
				<option value="1">Automatic</option>
				<option value="2">Manual</option>
			</select>
	</body>
</html>