<?php 
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
use ArrToArr\printArr;
$arr = ['a', 'b', 'c'];
echo printArr::printArray($arr);
