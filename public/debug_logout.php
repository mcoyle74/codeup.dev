<?php
require_once 'debug_functions.php';

function pageController() {
    clearSession();
    redirect("debug_login.php");
}
pageController();