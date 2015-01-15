<?php
	$mysqli = new mysqli(‘localhost’, ‘kraczekn_game’, ‘testing1234’, ‘kraczekn_game’);

	$query = “SELECT MIN(Try) FROM Table”;
	if(!$result = $mysqli->query($query))
	{
		die(“db error fool!”);
	}
	return $result