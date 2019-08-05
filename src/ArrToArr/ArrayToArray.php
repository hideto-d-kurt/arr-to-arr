<?php 

namespace ArrToArr;

class ArrayToArray
{
    protected $round = 0;

    public function testSort($a, $b, $type = 'DESC')
    {
        $this->round++;
        if($type == 'ASC') {
            return ($a > $b) ? true : false;
        } else if($type == 'DESC') {
            return ($a > $b) ? false : true;
        }
    }

    public static function sortByKeyInteger($arr, $by_key, $type = 'DESC')
    {
        $s = new sortByKey();
        recure:
        $tmp[0] = [];
        for($i = 0; $i < (count($arr)-1); $i++) {
            $compare = $s->testSort($arr[$i][$by_key], $arr[$i+1][$by_key], $type);
            if($compare) {
                $tmp[0] = $arr[$i];
                $arr[$i] = $arr[$i+1];
                $arr[$i+1] = $tmp[0];
                goto recure;
            }
        }
        return $arr;
    }

    public static function removeMongoId($arr)
    {
        $result = [];
        foreach($arr as $key => $val) {
            unset($val['_id']);
            array_push($result, $val);
        }
        return $result;
    }

    public function binarySearchLevelOne($arr, $left, $size, $search_value) 
    { 
        if ($size >= $left) { 
            $mid = ceil($left + ($size - $left) / 2); 
            if ($arr[$mid] == $search_value)  return floor($mid); 
            if ($arr[$mid] > $search_value)   return self::binarySearchLevelOne($arr, $left, $mid - 1, $search_value); 
            return self::binarySearchLevelOne($arr, $mid + 1, $size, $search_value); 
        } 
        return -1; 
    }
    
}
