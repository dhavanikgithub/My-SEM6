<?php 
    function primeNumber($num)
    {
        for($i=2;$i<$num;$i++)
        {
            if($num%$i==0)
            {
                return 0;
            }
        }
        return 1;
    }

    $startNumber = readline("Enter Starting Number: ");
    $endNumber = readline("Enter Ending Number: ");
    echo "Prime Numbers between $startNumber to $endNumber are: ";
    for($i=$startNumber;$i<=$endNumber;$i++)
    {
        if(primeNumber($i)==1)
        {
            echo $i," -> ";
        }
    }
?>