<?php

//Writing to a file in php
//$fptr =  fopen("myfile2.txt", "w");
//fwrite($fptr, "This is the best file on this planet.\n");
//fwrite($fptr, "This is another content.\n");
//fwrite($fptr, "This is another content3.\n");
//fclose($fptr);


//Appending to a file in php
$fptr =  fopen("myfile2.txt", "a");
fwrite($fptr, "This is being appended to the file.\n");
fclose($fptr);
?>