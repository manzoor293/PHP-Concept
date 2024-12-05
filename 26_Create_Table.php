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
// Create a table in the db
$sql="CREATE TABLE `triptable` ( `S.No` INT(6) NOT NULL AUTO_INCREMENT ,
 `Name` VARCHAR(12) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`S.No`))";
$result = mysqli_query($conn, $sql); // this query run to creat database

// Check for the table Creation Success
if($result){
  echo "The Table was created successfully!";
}
else{
  echo "The Table was not created successfully! because of this error...>".mysqli_error($conn);
}

?>