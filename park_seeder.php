<?php

require 'park_migration.php';
require 'parks.php';

$query = 'TRUNCATE national_parks';

$dbc->exec($query);

$insert = 'INSERT INTO national_parks (name, location, date_established, area_in_acres) VALUES';

foreach ($parks as $key => $park) {
	if ($key != 0) {
		$insert .= ',';
	}
	$insert .= " ('" . $park['name'] . "', '" . $park['location'] . "', '" . $park['date_established'] . "', '" . $park['area_in_acres'] . "')";
}

$dbc->exec($insert);

?>