<?php
// Connecting to database
$servername = "localhost";
$username = "root";
$password = "";
$database="dbmanzoor";

// Create a connection
$conn=mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if(!$conn){
  die("Sorry we failed to connect: ".mysqli_connect_error());
}
else{
  echo "Connection was successful<br>";
}

// Vriable to be inserted into the table
$name = "Faheem";
$destination = "Russia";
// Sql query to be executed
$sql = "INSERT INTO `triptable` (`Name`, `dest`) VALUES ('$name', '$destination')";
$result = mysqli_query($conn, $sql); // this query run to creat database

// Add a new trip to the Trip table in the database
if($result){
  echo "The record has been Inserted successfully!";
}
else{
  echo "The record was not Inserted successfully! because of this error...>".mysqli_error($conn);
}

?>