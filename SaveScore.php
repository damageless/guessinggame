<?php
require 'Database.php';
$try = $_POST['turns'];
if ($try != NULL){
$sql="INSERT INTO `kraczekn_game`.`table` (`ID`, `Try`) VALUES (NULL, ".$try.");";
mysqli_query($con,$sql);
mysqli_close($con);
}

?>
