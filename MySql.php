<?php
echo "Welcome to the stage where we are ready to get connected to a database.<br>";
/*Ways to connect to a MySQL database.
MySQLi extension
PDO*/
//Connecting to the database

$servername = "localhost";
$username = "root";
$password = "";

// Create a connection

$conn = mysqli_connect($servername, $username, $password);

if (!$conn){
    die("Sorry we failed to connect: ".mysqli_connect_error());
}
else{
    echo "Connection was successful";
}
?>