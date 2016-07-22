<?php

require_once '../Auth.php';

session_start();

function clearSession()
{
	session_unset();
	session_regenerate_id(true);
}

clearSession();
Auth::logout();

?>