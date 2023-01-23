<?php
    $r = $_POST['row'];
    $col=$_POST['column'];
    
    echo '<html><body><table border="1px solid black">';
    for($i=1;$i<=$r;$i++)
    {
        echo '<tr>';
        for($j=1;$j<=$col;$j++)
        {
            echo '<td>(',$i,",",$j,')</td>';
        }
        echo '</tr>';
    }
    echo '</table></body></html>'

?>