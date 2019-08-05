<?php 
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
use ArrToArr\ArrayToArray;

$data = [
    [
        'id' => 1,
        'name' => 'a'
    ],
    [
        'id' => 5,
        'name' => 'e'
    ],
    [
        'id' => 3,
        'name' => 'c'
    ],
    [
        'id' => 2,
        'name' => 'b'
    ],
    [
        'id' => 4,
        'name' => 'd'
    ],
    [
        'id' => 6,
        'name' => 'f'
    ],
    [
        'id' => 7,
        'name' => 'g'
    ],
    [
        'id' => 8,
        'name' => 'h'
    ],
    [
        'id' => 9,
        'name' => 'i'
    ],
    [
        'id' => 10,
        'name' => 'j'
    ],
    [
        'id' => 11,
        'name' => 'k'
    ],
    [
        'id' => 12,
        'name' => 'l'
    ],
    [
        'id' => 13,
        'name' => 'm'
    ],
    [
        'id' => 14,
        'name' => 'n'
    ],
    [
        'id' => 15,
        'name' => 'o'
    ],
    [
        'id' => 16,
        'name' => 'p'
    ]
];
$arr = ArrayToArray::sortByKeyInteger($data, 'id', 'ASC');
$size_index = count($arr) - 1;
$find = 6;
$key = 'id';
$result = ArrayToArray::binarySearchArraySet($arr, 0, $size_index, $find, $key);
if(($result == -1)) {
    echo "Element is not present in array\n";
} else {
    echo "Element is present at index ".$result."\n";
    print_r($arr[$result]);
}
