<?php
//Start the session and get the data
session_start();
echo "Welcome ".$_SESSION['username'];
echo "<br> Your favorite category is ".$_SESSION['favCat'];

echo "<br>";
?>