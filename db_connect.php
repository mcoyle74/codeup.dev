<?php

$dbc = new PDO('mysql:host=127.0.0.1;dbname=employees', 'codeup', 'codeup42');

$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
