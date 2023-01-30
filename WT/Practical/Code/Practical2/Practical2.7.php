<?php 
    function fibRecursiveMethod($memo,$num)
    {
        if($memo[$num]!=0)
        {
            return $memo[$num];
        }
        if($num==0 || $num==1)
        {
            return $num;
        }
        $memo[$num] = fibRecursiveMethod($memo, $num - 1) + fibRecursiveMethod($memo, $num - 2);
        return $memo[$num];
    }
    function fibLoopMethod($num)
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
    $n = readline("Enter Fibonacci Number: ");

    //Recursive
    echo "===== Recursive Method =====\n";
    $start = microtime(true);
    $memo = [];
    for($i=0;$i<=$n;$i++)
    {
        $memo[$i] = 0;
    }
    echo "Ans: ";
    for ($i = 0; $i <= $n;$i++)
    {
        $ans = fibRecursiveMethod($memo,$i);
        echo $ans." ";
    }
    $end = microtime(true);
    $timeRequire = $end - $start;
    echo "\nTotal Time Require: ", $timeRequire;

    //Loop
    echo "\n\n===== Loop Method =====\n";
    echo "Ans: ";
    $start = microtime(true);
    fibLoopMethod($n);
    $end = microtime(true);
    $timeRequire = $end - $start;
    echo "\nTotal Time Require: ", $timeRequire;
?>