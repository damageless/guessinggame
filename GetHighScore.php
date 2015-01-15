<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	$mysqli = new mysqli('localhost', 'kraczekn_game', 'testing1234');

	$query = "SELECT MIN(Try) FROM Table";
	if(!$result = $mysqli->query($query))
	{
		die("db error fool!");
	}
	return $result