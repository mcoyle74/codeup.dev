<?php

class Log
{
	private $filename;

	private $handle;

	public function __construct($prefix = 'log')
	{
		$this->setFilename();
		$this->handle = fopen($this->filename, 'a');
	}

	public function setFilename()
	{
		$this->filename = $prefix . '-' . date('Y-m-d') . '.log';
		$this->filename = trim($this->filename);
	}

	public function logMessage($logLevel, $message)
	{
		$entry = date('Y-m-d H:i:s') . " [$logLevel]" . " $message" . PHP_EOL;
		fwrite($this->handle, $entry);
	}

	public function info($message)
	{
		$this->logMessage('INFO', $message);
	}

	public function error($message)
	{
		$this->logMessage('ERROR', $message);
	}

	public function __destruct()
	{
		fclose($this->handle);
	}
}

?>