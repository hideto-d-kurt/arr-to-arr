<?php 
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
use ArrToArr\sortByKey;

$arr = [
    [
        'id' => 1,
        'name' => 'a'
    ],
    [
        'id' => 3,
        'name' => 'c'
    ],
    [
        'id' => 4,
        'name' => 'd'
    ],
    [
        'id' => 2,
        'name' => 'b'
    ]
];

$new_arr = sortByKey::sortByKeyInteger($arr, 'id', 'ASC');
print_r($new_arr);
