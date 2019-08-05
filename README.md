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