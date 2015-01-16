<?php
require 'Database.php';

$sql="SELECT `Try` FROM `table` ORDER BY `Try` LIMIT 0,5";
$result=mysqli_query($con,$sql);
// Associative array

  while ($row=mysqli_fetch_row($result))
    {
	//var_dump($row);
		echo("<br>".$row[0]);
	}

// Free result set
mysqli_free_result($result);

mysqli_close($con);
?>
