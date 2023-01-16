<?php 
    function daysInMonth($monthNumber)
    {
        if(is_int($monthNumber))
        {
            $arr = array(4,6,9,11);
            if($monthNumber>=1 && $monthNumber<=12)
            {
                if(in_array($monthNumber, $arr))
                {
                    echo "Number of Days in $monthNumber month: 30";
                }
                elseif($monthNumber==2)
                {
                    echo "Number of Days in $monthNumber month: 28";
                }
                else{
                    echo "Number of Days in $monthNumber month: 31";
                }
            }
            else
            {
                echo "Enter valid Month Number";
            }
        }
        if(is_string($monthNumber))
        {
            $monthNumber = strtolower($monthNumber);
            $arr = array("april","june","september","november");
            if(in_array($monthNumber,$arr))
            {
                echo "Number of Days in $monthNumber month: 30";
            }
            elseif($monthNumber=="february")
            {
                echo "Number of Days in $monthNumber month: 28";
            }
            else{
                echo "Number of Days in $monthNumber month: 31";
            }
        }
        
    }
    daysInMonth("september");
?>