<?php

// Connecting to database
$servername = "localhost";
$username = "root";
$password = "";
$database="dbmanzoor";

// Create a connection
$conn= mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if(!$conn){
  die("Sorry we failed to connect: ".mysqli_connect_error());
}
else{
  echo "Connection was successful<br>";
}

$sql = "SELECT * FROM `triptable`";
$result = mysqli_query($conn, $sql);
echo "<br>";

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the DataBase";
echo "<br>";

// Display the rows returned by th sql query
// if($num > 0){
//   $row = mysqli_fetch_assoc($result);
//   echo var_dump($row);
//   echo "<br>";
//   $row = mysqli_fetch_assoc($result);
//   echo var_dump($row);
//   echo "<br>";
//   $row = mysqli_fetch_assoc($result);
//   echo var_dump($row);
//   echo "<br>";
//   $row = mysqli_fetch_assoc($result);
//   echo var_dump($row);
//   echo "<br>";
//   $row = mysqli_fetch_assoc($result);
//   echo var_dump($row);
//   echo "<br>";
//   $row = mysqli_fetch_assoc($result);
//   echo var_dump($row);
//   echo "<br>";
//   $row = mysqli_fetch_assoc($result);
//   echo var_dump($row);
//   echo "<br>";
// }
while($row = mysqli_fetch_assoc($result)){
  echo $row['S.No'].' Hello '.$row['Name'].' welcome to '.$row['dest'];
  echo "<br>";
}

?>