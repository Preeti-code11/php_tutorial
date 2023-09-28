<?php
echo "Welcome to the world of multidimensional arrays.<br>";
//Creating a two dimensional array
$multiDim = array(
                    array(2,5,7,8),
                    array(1,2,3,1),
                    array(4,5,0,1)
);
//echo $multiDim[0][0];
//Printing the content of 2 dimension array

/*for ($i=0; $i<count($multiDim); $i++){

    echo var_dump($multiDim[$i]);
    echo"<>";

}*/

for ($i=0; $i<count($multiDim); $i++){

    for($j=0; $j<count($multiDim[$i]); $j++){
        echo $multiDim[$i][$j];
        echo " ";

    }
    echo "<br>";
}

?>