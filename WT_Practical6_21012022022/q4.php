<?php 
if(isset($_POST['upload']))
{
    $fileName = $_FILES['file1']['name'];
    $fileSize = $_FILES['file1']['size'];
    $tempFileLocation = $_FILES['file1']['tmp_name'];
    $fileType = $_FILES['file1']['type'];

    if(!file_exists($fileName))
    {
        if(move_uploaded_file($tempFileLocation,$fileName))
        {
            echo "File uploaded<br><br>";
        }
    }
    else
    {
        echo "File already exist<br><br>";
    }
    echo '<a href="'.$fileName.'"><b>Open File</b></a>';
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