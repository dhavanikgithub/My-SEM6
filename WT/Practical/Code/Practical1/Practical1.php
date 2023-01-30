<?php
    $student_name = "Vishal";
    $student_enrollment = 21012012033;
    $student_institute = "U.V. Patel Collage of Engineering";
    $student_university ="GUNI";
    $student_course = "B.Tech CE";
    $student_semester = "VI";
    $student_class = "C";
    $student_batchlab = "AB10";
    
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <table>
            <tr>
                <th colspan="2">Student Info</th>
            <tr>
            <tr>
                <td>Name:</td>
                <td><?php echo $student_name; ?></td>
            </tr>
            <tr>
                <td>Enrollment:</td>
                <td><?php echo $student_enrollment; ?></td>
            </tr>
            <tr>
                <td>Institute:</td>
                <td><?php echo $student_institute; ?></td>
            </tr>
            <tr>
                <td>University:</td>
                <td><?php echo $student_university; ?></td>
            </tr>
            <tr>
                <td>Course:</td>
                <td><?php echo $student_course; ?></td>
            </tr>
            <tr>
                <td>Semester:</td>
                <td><?php echo $student_semester; ?></td>
            </tr>
            <tr>
                <td>Class:</td>
                <td><?php echo $student_class; ?></td>
            </tr>
            <tr>
                <td>Batch/LAB:</td>
                <td><?php echo $student_batchlab; ?></td>
            </tr>
        </table>
    </body>
</html>