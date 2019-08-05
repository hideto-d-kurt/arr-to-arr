<?php 
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
use ArrToArr\ArrayToArray;

$arr = [2, 3, 4, 10, 40];
$size_index = count($arr) - 1;
$find = 10;
$result = ArrayToArray::binarySearchLevelOne($arr, 0, $size_index, $find);
if(($result == -1)) {
    echo "Element is not present in array\n";
} else {
    echo "Element is present at index ".$result."\n";
}
