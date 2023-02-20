<?php
$errorName = "";
$errorDOB = "";
$errorGender = "";
$errorEmail = "";
$errorAddress = "";
$errorMobile = "";
$errorCourse = "";
$errorDepartment = "";
$errorInstitute = "";
$output = "";
if(isset($_POST['btnsubmit']))
{
    $valid = 0;
    $name = $_POST['username'];
    $dob = $_POST['userdob'];
    $email = $_POST['useremail'];
    $address = $_POST['useraddress'];
    $mobile = $_POST['usermobilenumber'];
    $course = $_POST['usercourse'];
    $dept = $_POST['userdepartment'];
    $institute = $_POST['userinstitute'];

    $usernamepatter = "/^[a-zA-Z_]+$/";
    $mobilepatter = "/^[0-9]{10}$/";

    $dobYear = (int)date("Y", strtotime($dob));
    
    if(empty($name))
    {
        $valid = 0;
        $errorName = "Name is require";
    }
    else if(!preg_match($usernamepatter,$name))
    {
        $valid = 0;
        $errorName = "Username is not valid";
    }
    else{
        $valid = 1;
    }

    if(empty($_POST['usergender']))
    {
        $valid = 0;
        $errorGender = "Please select Gender";
    }
    else{
        $valid = 1;
    }

    if(empty($email))
    {
        $valid = 0;
        $errorEmail = "Email is require";
    }
    else{
        $valid = 1;
    }

    if(empty($dob))
    {
        $valid = 0;
        $errorDOB = "Date of Birth id require";
    }
    else if($dobYear>((int)date("Y")-18))
    {
        $valid = 0;
        $errorDOB = "Maximum " . ((int)date("Y") - 18) . " is valid";
    }
    else{
        $valid = 1;
    }

    if(empty($address))
    {
        $valid = 0;
        $errorAddress = "Address is require";
    }
    else{
        $valid = 1;
    }

    if(empty($mobile))
    {
        $valid=0;
        $errorMobile = "Mobile number is require";
    }
    else if(!preg_match($mobilepatter,$mobile))
    {
        $valid=0;
        $errorMobile = "Invalid Mobile number";
    }
    else{
        $valid=1;
    }

    if($course == "Select")
    {
        $valid = 0;
        $errorCourse = "Please select course";
    }
    else{
        $valid = 1;
    }

    if($institute=="Select")
    {
        $valid = 0;
        $errorInstitute = "Please select institute";
    }
    else{
        $valid = 1;
    }

    if($dept=="Select")
    {
        $valid = 0;
        $errorDepartment = "Please select department";
    }
    else{
        $valid = 1;
    }

    if($valid==1)
    {
        $output = $name.'<br>'.$dob.'<br>'.$_POST['usergender'].'<br>'.$email.'<br>'.$address.'<br>'.$mobile.'<br>'.$course.'<br>'.$dept.'<br>'.$institute;
    }

}

?>
<html>
    <body>
        <form  method="post">
            <table>
                <tr>
                    <td>Name: </td>
                    <td><input type="text" name="username"/></td>
                    <td><?php if (!empty($errorName)) {echo '<p style="color:red">'.$errorName.'</p>';}?></td>
                </tr>
                <tr>
                    <td>DOB: </td>
                    <td><input type="date" name="userdob"/></td>
                    <td><?php if (!empty($errorDOB)) {echo '<p style="color:red">'.$errorDOB.'</p>';}?></td>
                </tr>
                <tr>
                    <td>Gender: </td>
                    <td><input type="radio" name="usergender" value="Male"/>Male<input type="radio" name="usergender" value="Female"/>Female</td>
                    <td><?php if (!empty($errorGender)) {echo '<p style="color:red">'.$errorGender.'</p>';}?></td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><input type="email" name="useremail"/></td>
                    <td><?php if (!empty($errorEmail)) {echo '<p style="color:red">'.$errorEmail.'</p>';}?></td>
                </tr>
                <tr>
                    <td>Address: </td>
                    <td><input type="text" name="useraddress"/></td>
                    <td><?php if (!empty($errorAddress)) {echo '<p style="color:red">'.$errorAddress.'</p>';}?></td>
                </tr>
                <tr>
                    <td>Institute: </td>
                    <td>
                        <select name="userinstitute">
                            <option name="select" selected>Select</option>
                            <?php
                                $instituteArray = array("UVPCE", "BSPP");
                                for($i=0;$i<sizeof($instituteArray);$i++)
                                {
                                    echo '<option name="'.$instituteArray[$i].'">'.$instituteArray[$i].'</option>';
                                }
                            ?>
                            
                        </select>
                    </td>
                    <td><?php if (!empty($errorInstitute)) {echo '<p style="color:red">'.$errorInstitute.'</p>';}?></td>
                </tr>
                <tr>
                    <td>Department: </td>
                    <td>
                        <select name="userdepartment">
                            <option name="select" selected>Select</option>
                            <?php
                                $departmentArray = array("IT", "CE","AI");
                                for($i=0;$i<sizeof($departmentArray);$i++)
                                {
                                    echo '<option name="'.$departmentArray[$i].'">'.$departmentArray[$i].'</option>';
                                }
                            ?>

                        </select>
                    </td>
                    <td><?php if (!empty($errorDepartment)) {echo '<p style="color:red">'.$errorDepartment.'</p>';}?></td>
                </tr>
                <tr>
                    <td>Course: </td>
                    <td>
                        <select name="usercourse">
                            <option name="select" selected>Select</option>
                            <?php
                                $courseArray = array("Diploma", "MBA","BBA","B.Tech");
                                for($i=0;$i<sizeof($courseArray);$i++)
                                {
                                    echo '<option name="'.$courseArray[$i].'">'.$courseArray[$i].'</option>';
                                }
                            ?>
                        </select>
                    </td>
                    <td><?php if (!empty($errorCourse)) {echo '<p style="color:red">'.$errorCourse.'</p>';}?></td>
                </tr>
                <tr>
                    <td>Mobile: </td>
                    <td><input type="tel" name="usermobilenumber"/></td>
                    <td><?php if (!empty($errorMobile)) {echo '<p style="color:red">'.$errorMobile.'</p>';}?></td>
                </tr>
                <tr>
                    <td><input type="reset" name="btnreset"/></td>
                    <td><input type="submit" name="btnsubmit"/></td>
                </tr>
                <p><?php echo $output;?></p>
            </table>
        </form>
    </body>
</html>