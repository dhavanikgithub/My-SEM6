<?php 
    // function rec($num)
    // {
    //     if($num==0 || $num==1)
    //     {
    //         return $num;
    //     }
    //     return rec($num - 1) + rec($num - 2);
    // }
    function loop($num)
    {
        $arr = [];
        $arr[0] = 0;
        $arr[1] = 1;
        echo $arr[0], " ", $arr[1], " ";
        for($i=2;$i<=$num;$i++)
        {
            $arr[$i] = $arr[$i - 1] + $arr[$i - 2];
            echo $arr[$i], " ";
        }

    }
    loop(6);

?>