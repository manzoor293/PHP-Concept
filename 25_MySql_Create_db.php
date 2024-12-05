<?php
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
  echo "Connection was successful<br>";
}
// Create Database
$sql = "Create DATABASE dbmanzoor"; // create database
$result = mysqli_query($conn, $sql); // this query run to creat database

// Check for the database Creation Success
if($result){
  echo "The db was created successfully!";
}
else{
  echo "The db was not created successfully! because of this error...>".mysqli_error($conn);
}

?>