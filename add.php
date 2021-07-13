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
if(isset($_POST['left'])){
	$direction = "left";
    $my_query = "INSERT INTO direction_values (direction) VALUES ('$direction')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Left direction successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }
}
else if(isset($_POST['forward'])){
	$direction = "forward";
    $my_query = "INSERT INTO direction_values (direction) VALUES ('$direction')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Forward direction successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }
}
else if(isset($_POST['right'])){
	$direction = "right";
    $my_query = "INSERT INTO direction_values (direction) VALUES ('$direction')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Right direction successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }
}
else if(isset($_POST['backward'])){
	$direction = "backward";
    $my_query = "INSERT INTO direction_values (direction) VALUES ('$direction')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Backward direction successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }

}
else if(isset($_POST['off'])){
	$direction = "stop";
    $my_query = "INSERT INTO direction_values (direction) VALUES ('$direction')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Stop successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }

}
?>