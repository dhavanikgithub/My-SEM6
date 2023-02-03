<?php
function mergeArray(...$array){
    $tempArray = array();
    foreach($array as $it)
    {
        $tempArray=array_merge($tempArray,$it);
    }
    return $tempArray;
}
?>