<?php
    include("q1_1.php");
    include("q1_2.php");
    include("q2.php");
    include("q3.php");
    include("q4.php");
    include("q5.php");
    include("q6.php");
    if(isset($_POST['btnCompare']))
    {
        $str1 = $_POST['comparestr1'];
        $str2 = $_POST['comparestr2'];
        if(stringEqual($str1,$str2))
        {
            echo "$str1 == $str2<br>";
        }
        else{
            echo "$str1 != $str2<br>";
        }

    }
    if(isset($_POST['btnSearch']))
    {
        $str = $_POST['strMain'];
        echo "Original String: $str<br>";
        
        $searchStr = $_POST['searchString'];
        echo "Search String: $searchStr<br>";

        $index = indexOf($searchStr, $str);
        if($index!=-1)
        {
            echo "Search string Position is: $index<br>";
        }
        else{
            echo "Search string not found<br>";
        }
    }
    if(isset($_POST['btnLowerStr']))
    {
        $str = $_POST['lowerandupperstr'];
        echo "Original String: $str<br>";
        echo "Lowercase: ", toLower($str),"<br>";
    }
    if(isset($_POST['btnUpperStr']))
    {
        $str = $_POST['lowerandupperstr'];
        echo "Original String: $str<br>";
        echo "Uppercase: ",toUpper($str),"<br>";
    }
    if(isset($_POST['btnSizeStr']))
    {
        $str = $_POST['lowerandupperstr'];
        echo "Original String: $str<br>";
        echo "Length od String is : ",stringSize($str),"<br>";
    }
    if(isset($_POST['btnConcatinate']))
    {
        $str1 = $_POST['concatinatestr1'];
        $str2 = $_POST['concatinatestr2'];
        $sep = $_POST['seprator'];

        echo concatinateString($str1, $str2, $sep),"<br>";
        
    }
    if(isset($_POST['btnReplace']))
    {
        $str = $_POST['mainString'];
        $oldstr = $_POST['oldString'];
        $newstr = $_POST['newString'];

        echo "Original String: $str<br>";
        echo "Replaced string is: ",stringReplace($oldstr,$newstr,$str),"<br>";
    }
?>
<html>
    <body>
        <form method="post">
            <table>
                <tr>
                    <td>String1: <input type="text" name="comparestr1"/>
                    <input type="submit" name="btnCompare" value="Compare" />
                     String2: <input type="text" name="comparestr2"/></td>
                </tr>
                <tr>
                    <td><hr></td>
                </tr>
                <tr>
                    <td>String: <input type="text" name="strMain"/>
                    Search String: <input type="text" name="searchString"/>
                    <input type="submit" name="btnSearch" value="Search"/></td>
                </tr>
                <tr>
                    <td><hr></td>
                </tr>
                <tr>
                    <td>String : <input type="text" name="lowerandupperstr"/>
                    <input type="submit" name="btnLowerStr" value="Lower" />
                    <input type="submit" name="btnUpperStr" value="Upper" />
                    <input type="submit" name="btnSizeStr" value="Length" /></td>
                </tr>
                <tr>
                    <td><hr></td>
                </tr>
                <tr>
                    <td>String1 : <input type="text" name="concatinatestr1"/>
                    String2 : <input type="text" name="concatinatestr2"/>
                    Seperator : <input type="text" name="seprator"/>
                    <input type="submit" name="btnConcatinate" value="Concatinate" />
                    </td>
                </tr>
                <tr>
                    <td><hr></td>
                </tr>
                <tr>
                    <td>MainString : <input type="text" name="mainString"/></td>
                </tr>
                <tr>
                    <td>OldString : <input type="text" name="oldString"/></td>
                </tr>
                <tr>
                    <td>NewString : <input type="text" name="newString"/></td>
                </tr>
                <tr>
                    <td><input type="submit" name="btnReplace" value="Replace" /></td>
                </tr>
                <tr>
                    <td><hr></td>
                </tr>
            </table>
        </form>
    </body>
</html>