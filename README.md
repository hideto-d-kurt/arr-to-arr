# Array to Array

Generated using comoser
```shell
composer require hideto-d-kurt/arr-to-arr
```

## Sort by integer value with key
Example
```php
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

$new_arr = sortByKey::sortByKeyInteger($arr, 'id', 'ASC');
print_r($new_arr);
```