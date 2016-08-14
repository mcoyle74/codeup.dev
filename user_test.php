<?php

require_once 'User.php';

// $user = new User();
// $user->name = 'Bob Harris';
// $user->email = 'bobharris@callmebob.org';
// $user->password = password_hash('secret', PASSWORD_DEFAULT);
// $user->save();

$user = User::find(1);
var_dump($user);
?>