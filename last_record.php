<?php
//set connection variables 
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_db = 'motors_db2';
//connection to server & database 
$connection = mysqli_connect($db_host, $db_user, $db_password, $db_db );
//check connection 
if(mysqli_connect_errno()){
  printf("Connect failed: %s\n", mysqli_connect_errno());
  exit();
}

$query1 = mysqli_query($connection, "SELECT * FROM direction_values ORDER BY ID DESC LIMIT 1");
$row = mysqli_fetch_array($query1);

echo "RECORDING THE LAST DATA...";
echo "<br>";
echo "<br>";
echo"<hr>";

echo "id = ".$row['ID'];
echo "<br>";
echo "Direction =  ".$row['direction'];


?>





