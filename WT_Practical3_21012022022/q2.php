<?php
function stringEqual($string1,$string2)
{
    if(strcmp($string1, $string2)==-1)
    {
        return false;
    }
    else{
        return true;
    }
}
?>