<!-- Embedding PHP code in HTML -->


<?php
function sum ($num1, $num2)
{
    $num3=$num1+$num2;
    return $num3;
}
?>

<html>
    <head>
        <link rel="stylesheet" href="mystyle.css">
    </head>
    <body>
        <table border="1px solid">
            <tr>
                <th>Operation</th>
                <th>Values</th>
                <th>Result</th>

            </tr>
            <tr>
                <td>Sum</td>
                <td>Number1 = 24523 and Number2 = 562121</td>
                <td><?php echo sum(24523,562121); ?></td>
            </tr>
        </table>
    </body>
</html>
