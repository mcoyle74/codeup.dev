<?php
	
	function inputHas($key) {
		return isset($_REQUEST[$key]) ? true : false;
	}

	function inputGet($key) {
		$check = isset($_REQUEST[$key]) ? $_REQUEST[$key] : NULL;
		if ($check != NULL) {
			$theKeyIs = $_REQUEST[$key];
			return $theKeyIs;
		}
	}

	function escape($input) {
		$escaped = htmlspecialchars(strip_tags($input));
		return $escaped;
	}

?>