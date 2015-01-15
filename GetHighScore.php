<?php
	require 'Database.php';
	
	$query = "SELECT MIN(Try) FROM Table";
	if(!$result = $db->query($query))
	{
		die("db error fool!");
	}
	return $result
	?>