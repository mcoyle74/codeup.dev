<?php
	
	function inputHas($key) {
		// $keyToCheck = $_REQUEST[$key];
		// $result = isset($keyToCheck) ? true : false;
		// if ($result) {
		// 	return true;
		// }
		// return false;
		$result = isset($_REQUEST[$key]) ? true : false;
		return $result;
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