<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	
$servername = "localhost";
$username = "kraczekn_game";
$password = "testing1234";

// Create connection
$db = new mysqli($servername, $username, $password);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
echo "Connected successfully";


?>