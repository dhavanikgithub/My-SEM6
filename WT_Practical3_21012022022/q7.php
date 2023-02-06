<?php
function claculate($a,$b,$x)
{
    $str = "";
    for($i=$a;$i<=$b;$i=$i+$x)
    {
        $str = $str . "$i -> ";
    }
    return $str;
}
?>