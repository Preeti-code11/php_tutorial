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

$sql = "SELECT * FROM `phptrip` WHERE `age`=31";
$result = mysqli_query($conn, $sql);

//Usage of WHERE clause to fetch the data from the database
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the database<br>";
$no=1;
if($num>0){
       while($row = mysqli_fetch_assoc($result)){
          echo $no." Hello ".$row['name']." your age is ".$row['age'];
          echo "<br>"; 
          $no = $no+1;
       }
  }
//Usage of WHERE clause to Update data
$sql = "UPDATE `phptrip` SET `name` = 'Savitaupdated' WHERE `sn` = 3"; 
$result = mysqli_query($conn, $sql);

if($result){
    echo "We updated the record successfully!";
}
else{
    echo "We could not update the record.";
}
?>