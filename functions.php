<?php
echo "Welcome to the world of php functions.<br>";
function processMarks($marksArr){
    $sum = 0;
    foreach ($marksArr as $value) {
        $sum += $value;
    }
    return $sum;
}

$rohanDas = [34, 93, 45, 75, 96, 97];
$sumMarks = processMarks($rohanDas);

$harry = [67, 77, 89, 97, 98, 99];
$sumMarksHarry = processMarks($harry);

echo "Total marks scored by Rohan out of 600 is $sumMarks <br>";
echo "Total marks scored by Harry out of 600 is $sumMarksHarry <br>";
?>