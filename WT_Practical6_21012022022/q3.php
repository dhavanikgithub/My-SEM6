<?php 
function formatSizeUnits($bytes)
{
    if ($bytes >= pow(1024,3))
    {
        $bytes = number_format($bytes / pow(1024,3), 2) . ' GB';
    }
    elseif ($bytes >= 1048576)
    {
        $bytes = number_format($bytes / pow(1024,2), 2) . ' MB';
    }
    elseif ($bytes >= 1024)
    {
        $bytes = number_format($bytes / 1024, 2) . ' KB';
    }
    elseif ($bytes > 1)
    {
        $bytes = $bytes . ' bytes';
    }
    elseif ($bytes == 1)
    {
        $bytes = $bytes . ' byte';
    }
    else
    {
        $bytes = '0 bytes';
    }

    return $bytes;
}
if(isset($_POST['upload']))
{
    $fileName = $_FILES['file1']['name'];
    $fileSize = $_FILES['file1']['size'];
    $tempFileLocation = $_FILES['file1']['tmp_name'];
    $fileType = $_FILES['file1']['type'];

    echo "File name: ",$fileName,"<br>";
    echo "File size: ",formatSizeUnits($fileSize),"<br>";
    echo "File type: ",$fileType,"<br>";
    echo "File temp location: ",$tempFileLocation,"<br>";
}

?>
<html>
    <body>
        <form method='post' enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Upload File</td>
                    <td><input type="file" name="file1"/></td>
                    <td><input type="submit" name='upload' value="Upload"/></td>
                </tr>
            </table>
        </form>
    </body>
</html>