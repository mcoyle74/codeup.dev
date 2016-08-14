<?php

require_once 'User.php';

// $user = new User();
// $user->name = 'Bob Harris';
// $user->email = 'bobharris@callmebob.org';
// $user->password = password_hash('secret', PASSWORD_DEFAULT);
// $user->save();

// $user = User::find(1);
// $user->name = 'Bob Robertson';
// $user->email = 'bob@bob.com';
// $user->password = password_hash('mysupersecret', PASSWORD_DEFAULT);
// $user->save();

// $user = new User();
// $user->name = 'Bob Johnson';
// $user->email = 'bobjohnson@bob.org';
// $user->password = password_hash('youwillneverguess', PASSWORD_DEFAULT);
// $user->save();

// $user = new User();
// $user->name = 'Bob Smith';
// $user->email = 'bobsmith@thebob.com';
// $user->password = password_hash('mynameisbob', PASSWORD_DEFAULT);
// $user->save();

// foreach (User::all() as $user) {
// 	echo 'ID: ' . $user->id . PHP_EOL,
// 		'Name: ' . $user->name . PHP_EOL,
// 		'Email: ' . $user->email . PHP_EOL;
// }

$user = User::find(1);
$user->delete();

?>