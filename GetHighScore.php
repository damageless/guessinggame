<?php
 echo "well i got here";
require 'Database.php';
$sql = "SELECT MIN('Try') FROM Table";
echo $sql;
$result = $db->query($sql);
echo var_dump($result);


 ?>