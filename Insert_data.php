<?php
//Connecting to the database

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbpreeti";

// Create a connection

$conn = mysqli_connect($servername, $username, $password, $database);

//Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ".mysqli_connect_error());
}
else{
    echo "Connection was successful <br>";
}
//Sql query to be executed
$sql = "INSERT INTO `phptrip` (`name`, `age`) VALUES ('Neha', '31')";
$result = mysqli_query($conn, $sql);

//Add a new trip to the Trip table
if($result){
    echo "The record has been inserted successfully";
}
else{
    echo "The record has not been inserted successfully because of this error--> ". mysqli_error($conn);
}
?>