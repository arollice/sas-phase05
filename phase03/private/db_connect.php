<?php

$dbhost = 'localhost';
$dbuser = 'sally';
$dbpass = 'P@ssWord4321';
$dbname = 'salamanders';

//create connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

//perform query
$query = "SELECT * FROM salamander";
$result_set = mysqli_query($connection, $query);

//use returned data (if any)
while($result = mysqli_fetch_assoc($result_set)){
  echo $result['name'] . "<br />";
}

//release returned data
mysqli_free_result($result_set);

//close connection
mysqli_close($connection);

?>