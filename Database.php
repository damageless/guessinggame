<?php	
$servername = "localhost";
$username = "kraczekn_game";
$password = "testing1234";
$database = "kraczekn_game";

$con=mysqli_connect("localhost",$username,$password,$database);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
?>