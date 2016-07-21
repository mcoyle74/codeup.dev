<?php
require_once 'debug_functions.php';


function pageController() {
	session_start();
	clearSession();
	redirect("debug_login.php");
}
pageController();