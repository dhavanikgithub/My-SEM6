<?php
   $sum = 0;
    for($i=1;$i<=100;$i++)
    {
        if($i%2!=0)
        {
            $sum+=$i;
        }
    }
    echo "Sum of 1 to 100 ODD numbers is: ",$sum;
?>