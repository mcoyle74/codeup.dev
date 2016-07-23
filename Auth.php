<?php

define('LOGGED_IN_USER', 'logged-in-user');

require_once 'Log.php';

class Auth
{
	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';
	public static $username = 'guest';

	public static function attempt($username, $password) {
		$log = new Log();
		if ($username == 'guest' && password_verify($password, self::$password)) {
			session_start();
			$_SESSION[LOGGED_IN_USER] = self::$username;
			$log->info("User $username logged in.");
			return true;
		} else {
			$log->error("User $username failed to log in!");
			return false;
		}
	}

	public static function check() {
		return (isset($_SESSION[LOGGED_IN_USER]) && $_SESSION[LOGGED_IN_USER] == 'guest') ? true : false;
	}

	public static function user() {
		return $_SESSION[LOGGED_IN_USER];
	}

	public static function logout() {
		$log = new Log();
		$log->info('User ' . self::user() . ' logged out.');
		header('Location: login.php');
		exit(0);
	}
}

?>