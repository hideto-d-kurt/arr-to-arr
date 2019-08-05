# Array to Array for PHP
[![Latest Stable Version](https://poser.pugx.org/hideto-d-kurt/arr-to-arr/v/stable)](https://packagist.org/packages/hideto-d-kurt/arr-to-arr)
[![Total Downloads](https://poser.pugx.org/hideto-d-kurt/arr-to-arr/downloads)](https://packagist.org/packages/hideto-d-kurt/arr-to-arr)
[![License](https://poser.pugx.org/hideto-d-kurt/arr-to-arr/license)](https://packagist.org/packages/hideto-d-kurt/arr-to-arr)

# Requirements
```
 * PHP >= 5.3.0
```

# Installation
```shell
composer require hideto-d-kurt/arr-to-arr
```

# Usage
## Sort by integer value with key
Example
```php
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

$new_arr = ArrayToArray::sortByKeyInteger($arr, 'id', 'ASC');
print_r($new_arr);
```
Result
```shell
Array
(
    [0] => Array
        (
            [id] => 1
            [name] => a
        )

    [1] => Array
        (
            [id] => 2
            [name] => b
        )

    [2] => Array
        (
            [id] => 3
            [name] => c
        )

    [3] => Array
        (
            [id] => 4
            [name] => d
        )

)
```

## Remove mongodb object id '_id'
Example
```php
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use ArrToArr\ArrayToArray;

class Users extends Eloquent 
{
    protected $collection = 'users';
    
    public static function getModel() {
        return new Users();
    }

    public static function getAllUser()
    {
        $arrToarr = new ArrayToArray();
        $result = self::get();
        $result = json_decode($result, true);
        $result = $arrToarr->removeMongoId($result);
        return $result;
    }
}
```

## Sort by integer value with Array set
Example
```php
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
```
Result
```
Element is present at index 5
Array
(
    [id] => 6
    [name] => f
)
```