<?php

class Input
{
	/**
	 * Check if a given value was passed in the request
	 *
	 * @param string $key index to look for in request
	 * @return boolean whether value exists in $_POST or $_GET
	 */
	public static function has($key)
	{
		return isset($_REQUEST[$key]);
	}

	/**
	 * Get a requested value from either $_POST or $_GET
	 *
	 * @param string $key index to look for in index
	 * @param mixed $default default value to return if key not found
	 * @return mixed value passed in request
	 */
	public static function get($key, $default = null)
	{
		return self::has($key) ? $_REQUEST[$key] : $default;
	}

	public static function isPost()
	{
		return $_SERVER['REQUEST_METHOD'] === 'POST';
	}

	public static function getString($key, $min = 0, $max = 255)
	{
		if (gettype($key) != 'string') {
			throw new InvalidArgumentException('Input must be a string.');
		}
		if (!self::has($key)) {
			throw new OutOfRangeException('Missing input.');
		}
		if (gettype(self::get($key)) != 'string') {
			throw new DomainException('Invalid input type.');
		}
		return trim(self::get($key)); 
	}

	public static function getNumber($key, $min = 0, $max = 100000000)
	{
		if (!is_numeric($key)) {
			throw new InvalidArgumentException('Input must be a number.');
		}
		if (!self::has($key)) {
			throw new OutOfRangeException('Input missing.');
		}
		if (!is_numeric(self::get($key))) {
			throw new DomainException('Invalid input type.');
		}
		return floatval(self::get($key));
	}

	///////////////////////////////////////////////////////////////////////////
	//                      DO NOT EDIT ANYTHING BELOW!!                     //
	// The Input class should not ever be instantiated, so we prevent the    //
	// constructor method from being called. We will be covering private     //
	// later in the curriculum.                                              //
	///////////////////////////////////////////////////////////////////////////
	private function __construct() {}
}
