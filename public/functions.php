<?php
	
	function inputHas($key) {
		$result = isset($_REQUEST($key)) ? true : false;
		return $result;
	}

	function inputGet($key) {
		$theKeyIs = isset($_REQUEST($key)) ? $_REQUEST($key) : NULL;
		return $theKeyIs;
	}

	function escape($input) {
		$escaped = htmlspecialchars(strip_tags($input));
		return $escaped;
	}

?>