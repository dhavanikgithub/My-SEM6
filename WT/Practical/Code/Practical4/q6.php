<?php
    $vowelArray = array('a', 'e', 'i', 'o', 'u');
    $count = 0;
    function vowelCount($string)
    {
        $str = strtolower($string);
        for($i=0;$i<strlen($str);$i++)
        {
            if(in_array($str[$i],$GLOBALS['vowelArray']))
            {
                $GLOBALS['count']++;
            }
        }
        return $GLOBALS['count'];
    }
?>