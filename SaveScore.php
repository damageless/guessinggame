<?php
	require 'Database.php';
	$try = $_POST['turns'];
	$sql = 'INSERT INTO Table (Try) VALUES (?)';
	$stmt->bind_param("sss", $try);
	$stmt = $db->prepare($sql);
	$stmt->execute();
	$stmt->close();
	?>