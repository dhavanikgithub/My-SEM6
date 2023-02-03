<?php
include('./q1.php');
include('./q2.php');
include('./q3.php');
include('./q4.php');
include('./q5.php');
include('./q6.php');
?>

<html>
    <body>
        <form method="post" action="">
            <table>
                <tr>
                    <td>No of element: </td>
                    <td><input type="text" name="arrayLen"/>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="getArraySize"/>
                </td>
            </table>
        <form method="post" action="">
            <table>
                <tr>
                            <?php
                            if(isset($_POST['getArraySize']))
                            {
                                echo "<td>";
                                echo "<table>";
                                echo "<tr><th colspan='2'>Array 1</th></tr>";
                                $arraySize=$_POST['arrayLen'];
                                for($i=1;$i<=$arraySize;$i++)
                                {
                                    echo "<tr>";
                                    echo "<td>Element $i: </td>";
                                    echo "<td><input type='text' name='e".$i."'/></td>";
                                    echo "</tr>";
                                }
                                echo "<tr><td><input type='hidden' name='arrLen' value='".$arraySize."'/></td></tr>";
                                echo "</table>";
                                echo "</td><td>";
                                echo "<table>";
                                echo "<tr><th colspan='2'>Array 2</th></tr>";
                                
                                for($i=1;$i<=$arraySize;$i++)
                                {
                                    echo "<tr>";
                                    echo "<td>Element $i: </td>";
                                    echo "<td><input type='text' name='ae".$i."'/></td>";
                                    echo "</tr>";
                                }
                                echo "</table></td><td style='text-align:top;'>";
                                echo "<table><tr><td>Search Element: </td><td><input type='text' name='arraySearchElement'/></td></tr>";
                                echo "<tr><td><input type='submit' name='arrayMin' value='Min'/></td></tr>";
                                echo "<tr><td><input type='submit' name='arrayMax' value='Max'/></td></tr>";
                                echo "<tr><td><input type='submit' name='arrayReverse' value='Reverse'/></td></tr>";
                                echo "<tr><td><input type='submit' name='arrayFilterDuplicate' value='Remove Duplicate'/></td></tr>";
                                echo "<tr><td><input type='submit' name='arraySort' value='Sort'/></td></tr>";
                                echo "<tr><td><input type='submit' name='arraySearch' value='Search Element'/></td></tr>";
                                echo "<tr><td><input type='submit' name='arrayCombine' value='Merge Array'/></td></tr>";
                                echo "</table></td>";
                            }
                            if(isset($_POST['arrayMin']))
                            {
                                $arr = array();
                                for ($i = 1; $i <= $_POST['arrLen'];$i++)
                                {
                                    
                                    array_push($arr,$_POST['e'.$i]);
                                }
                                // $arr = array($_POST['e1'], $_POST['e2'], $_POST['e3'], $_POST['e4'], $_POST['e5']);
                                echo "Min element of array is: ",findMin($arr);
                            }
                            if(isset($_POST['arrayMax']))
                            {
                                $arr = array();
                                for ($i = 1; $i <= $_POST['arrLen'];$i++)
                                {
                                    
                                    array_push($arr,$_POST['e'.$i]);
                                }
                                echo "Max element of array is: ",findMax($arr);
                            }
                            if(isset($_POST['arrayReverse']))
                            {
                                $arr = array();
                                for ($i = 1; $i <= $_POST['arrLen'];$i++)
                                {
                                    
                                    array_push($arr,$_POST['e'.$i]);
                                }
                                echo "Original Array is: ";
                                print_r($arr);
                                echo "<br>Reverse array is: ";
                                print_r(reverseArray($arr));
                            }
                            if(isset($_POST['arrayFilterDuplicate']))
                            {
                                $arr = array();
                                for ($i = 1; $i <= $_POST['arrLen'];$i++)
                                {
                                    
                                    array_push($arr,$_POST['e'.$i]);
                                }
                                echo "Original Array is: ";
                                print_r($arr);
                                echo "<br>Filter array is: ";
                                print_r(removeDuplicateArray($arr));
                            }
                            if(isset($_POST['arraySort']))
                            {
                                $arr = array();
                                for ($i = 1; $i <= $_POST['arrLen'];$i++)
                                {
                                    
                                    array_push($arr,$_POST['e'.$i]);
                                }
                                echo "Original Array is: ";
                                print_r($arr);
                                echo "<br>Sorted Array is: ";
                                print_r(sortArray($arr));
                            }
                            if(isset($_POST['arraySearch']))
                            {
                                $arr = array();
                                for ($i = 1; $i <= $_POST['arrLen'];$i++)
                                {
                                    
                                    array_push($arr,$_POST['e'.$i]);
                                }
                                $searchElement = $_POST['arraySearchElement'];
                                $ind = searchArray($searchElement, $arr);
                                if($ind!=-1)
                                {
                                    echo "$searchElement found at : $ind";
                                }
                                else{
                                    echo "Element Not Found";
                                }
                            }
                            if(isset($_POST['arrayCombine']))
                            {
                                $arr1 = array();
                                $arr2 = array();
                                for ($i = 1; $i <= $_POST['arrLen'];$i++)
                                {
                                    array_push($arr1,$_POST['e'.$i]);
                                    array_push($arr2,$_POST['ae'.$i]);
                                }
                                echo "Array 1 is: ";
                                print_r($arr1);
                                echo "<br> Array 2 is: ";
                                print_r($arr2);
                                echo "<br> Final Array is: ";
                                print_r(mergeArray($arr1, $arr2));
                            }
                            
                        ?>
                    </td>
                </tr>
        </form>
    </body>
</html>
                    