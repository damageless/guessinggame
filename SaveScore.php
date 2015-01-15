<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	$try = $_POST[‘turns’];
	$mysqli = new mysqli(‘localhost’, ‘kraczekn_game’, ‘testing1234’, ‘kraczekn_game’);

	if (mysqli_connect_errno()) {
    		printf("Connect failed: %s\n", mysqli_connect_error());
    		exit();
	}
	$sql = ‘INSERT INTO Table (Try) VALUES (?)’;
	$stmt->bind_param(“sss”, $try);
	$stmt = $mysqli->prepare($sql);

	$stmt->execute();

	$stmt->close();