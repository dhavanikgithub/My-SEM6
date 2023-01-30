<?php 
    date_default_timezone_set("Asia/Kolkata");
    $h = date("H");
    $m = date("i");
    if($h>=5 && $h <= 11 && $m>=0 && $m<=60)
    {
        echo "Good Morning";
    }
    elseif($h>=12 && $m>=0 && $h <= 14 && $m <= 60)
    {
        echo "Good Afternoon";
    }
    elseif($h>=15 && $m>=0 && $h <=19  && $m <= 60)
    {
        echo "Good Evening";
    }
    else
    {
        echo "Good Night";
    }
?>