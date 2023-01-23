<html>
    <body>
        <table>
            <form method="post">
                <tr>
                    <td>Row: </td>
                    <td><input type="number" name="row"/>
                </tr>
                <tr>
                    <td>Column: </td>
                    <td><input type="number" name="column"/>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Click"/>
                </tr>
            </form>
        </table>
        <?php
            if($_POST)
            {
                $row = $_POST['row'];
                $column = $_POST['column'];
                echo "<br>Row: $row  Column: $column</br></br>";
                echo '<table border="1px solid black">';
                for($i=1;$i<=$row;$i++)
                {
                    echo '<tr>';
                    for($j=1;$j<=$column;$j++)
                    {
                        echo '<td>(',$i,",",$j,')</td>';
                    }
                    echo '</tr>';
                }
                echo '</table>';
            }
        ?>
    </body>
</html>
