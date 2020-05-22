<?php


function countSameElement($array, $number)
{
    $count = 0;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == $number) {
            echo $i;
            $count++;
            echo ", ";
        }
    }
    echo "<br>";
    return $count . " la so lan xuat hien cua so: " . "$number";
}

$myArray = [1, 3, 9, 2, 3, 7, 4, 3, 3];
$number = 3;
echo countSameElement($myArray, $number);
