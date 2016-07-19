<?php
	
	function inputHas($key) {
		$result = isset($key) ? true : false;
		return $result;
	}

	function inputGet($key) {
		$theKey = isset($key) ? $key : NULL;
		return $theKey;
	}

	function escape($input) {
		$escaped = htmlspecialchars(strip_tags($input));
		return $escaped;
	}

?>