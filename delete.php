<?php
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

$sql = "DELETE FROM `phptrip` WHERE `age` = 30";
$result = mysqli_query($conn, $sql);

if($result){
    echo "Delete successfully!";
}
else{
    $err = mysqli_error($conn);
    echo "Not deleted successfully due to this error --> $err";
}
?>