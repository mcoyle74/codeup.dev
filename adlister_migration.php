<?php

require_once 'adlister_constants.php';
require_once 'db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$query = 'DROP TABLE IF EXISTS users';

$dbc->exec($query);

$query = 'CREATE TABLE users(
		id INT UNSIGNED NOT NULL AUTO_INCREMENT,
		name VARCHAR (100) NOT NULL,
		email VARCHAR (100) NOT NULL,
		password VARCHAR (100) NOT NULL,
		PRIMARY KEY (id)
	)';

$dbc->exec($query);

?>