<?php

require_once 'User.php';

$user = new User();
$user->name = 'Bob Harris';
$user->email = 'bobharris@callmebob.org';
$user->password = password_hash('secret', PASSWORD_DEFAULT);
$user->save();
var_dump($user);

?>