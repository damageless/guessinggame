<?php
require 'Database.php';
$try = $_POST['turns'];
if ($try == "") {
	echo "no input recieved";
} else {
	echo "input was recieved as ".$try;

	$sql = "INSERT INTO table (try)
VALUES (".$try.")";
	echo $sql;

	if ($db->query($sql) === TRUE) {
		echo "High Score Recorded";
	} else {
		echo "Error: " . $sql . "<br>" . $db->error;
	}
}
$db->close();
?>