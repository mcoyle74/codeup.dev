<?php

require_once '../Auth.php';

session_start();
Auth::logout();

function clearSession()
{
	session_unset();
	session_regenerate_id(true);
}

clearSession();

?>