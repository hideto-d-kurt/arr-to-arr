<?php 
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
use ArrToArr\ArrayToArray;

$arr = [
    [
        'id' => 1,
        'name' => 'a'
    ],
    [
        'id' => 3,
        'name' => 'd'
    ],
    [
        'id' => 4,
        'name' => 'c'
    ],
    [
        'id' => 2,
        'name' => 'b'
    ]
];

$new_arr = ArrayToArray::addNewKey($arr, 'email', ['id', 'name']);
print_r($new_arr);
