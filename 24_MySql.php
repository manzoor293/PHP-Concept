<?php
echo 'Welcome to the stage where we are ready to get connected to a database <br>';
// Way to connect to MySQL Database
// 1. MySQLi extention
//     i. Using Procedure method 
//     ii. Using Object oriented method
// 2. PDO 

// Connecting to database
$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn=mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if(!$conn){
  die("Sorry we failed to connect: ".mysqli_connect_error());
}
else{
  echo "Connection was successful";
}

?>