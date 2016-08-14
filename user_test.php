<?php

require_once 'User.php';

// $user = new User();
// $user->name = 'Bob Harris';
// $user->email = 'bobharris@callmebob.org';
// $user->password = password_hash('secret', PASSWORD_DEFAULT);
// $user->save();

$user = User::find(1);
$user->name = 'Bob Robertson';
$user->email = 'bob@bob.com';
$user->password = password_hash('mysupersecret', PASSWORD_DEFAULT);
$user->save();
var_dump($user);
?>