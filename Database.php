<?php	
$servername = "localhost";
$username = "kraczekn_game";
$password = "testing1234";

// Create connection
$db = new mysqli($servername, $username, $password);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
?>