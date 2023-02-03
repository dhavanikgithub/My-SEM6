<?php
function removeDuplicateArray($array,$flag=null)
{
    if($flag!=null)
    {
        return array_unique($array,$flag);
    }
    else{
        return array_unique($array);
    }
}
?>