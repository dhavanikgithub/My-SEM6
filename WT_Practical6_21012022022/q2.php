<?php 
$fp = fopen('q2_test.txt','r');
$vowel_pattern = "/[aeiou]/i";
$digit_pattern = "/[0-9]/";
$space_pattern = "/[ ]/";
$consonants_pattern = "/[a-z]/i";
$count = array("vowel"=>0,"digit"=>0,"space"=>0,"consonants"=>0);
$fileString="";
while (!feof($fp))
{
    $char = fgetc($fp);
    $fileString .= $char;
    if(preg_match($vowel_pattern,$char))
    {
        $count['vowel']++;
    }
    else if(preg_match($digit_pattern,$char))
    {
        $count['digit']++;
    }
    else if(preg_match($space_pattern,$char))
    {
        $count['space']++;
    }
    else if(preg_match($consonants_pattern,$char))
    {
        $count['consonants']++;
    }
}

fclose($fp);
?>
<html>
    <head>
        <style>
            #table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

            #table td, #table th {
            border: 1px solid #ddd;
            padding: 8px;
            }

            #table tr:nth-child(even){background-color: #f2f2f2;}

            #table tr:hover {background-color: #ddd;}

            #table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <td>File Content</td>
                <td><textarea rows="5" cols="100%" readonly><?php echo $fileString;?></textarea></td>
            </tr>
        </table>
        <table id="table" >
            <tr>
                <th>Name</th>
                <th>Count</th>
            </tr>
            <tr>
                <td>Vowels</td>
                <td><?php echo $count['vowel']; ?></td>
            </tr>
            <tr>
                <td>Digits</td>
                <td><?php echo $count['digit']; ?></td>
            </tr>
            <tr>
                <td>White Spaces</td>
                <td><?php echo $count['space']; ?></td>
            </tr>
            <tr>
                <td>Consonants</td>
                <td><?php echo $count['consonants']; ?></td>
            </tr>
        </table>
    </body>
</html>