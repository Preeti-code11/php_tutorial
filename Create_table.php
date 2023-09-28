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

//Create a table in the db
$sql = "CREATE TABLE `phptrip` (`sn` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `age` INT(3) NOT NULL , PRIMARY KEY (`sn`))";
$result = mysqli_query($conn, $sql);

//Check for the table creation success
if($result){
    echo "The table was created successfully";
}
else{
    echo "The table was not created successfully because of this error--> ". mysqli_error($conn);
}
?>