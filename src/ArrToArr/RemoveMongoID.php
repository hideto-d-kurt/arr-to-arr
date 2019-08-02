<?php 

namespace ArrToArr;

class RemoveMongoID
{

    public static function removeMongoId($arr)
    {
        $result = [];
        foreach($arr as $key => $val) {
            unset($val['_id']);
            array_push($result, $val);
        }
        return $result;
    }
    
}
