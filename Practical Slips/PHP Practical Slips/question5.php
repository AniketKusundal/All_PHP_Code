<!-- Q.1Solve all following
a. Design a HTML form, accept student-Name, Age, and Mobile No from user.
Using PHP validate for following
i. Student Age must be between 1 to20. [5 Marks] -->




<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Q</title>
    </head>
    <body>
        <h2>Student Entry</h2>
    <form action="" method="POST">
        <input type="text" id="sname" name="sname" placeholder = "student Name " required>
        <input type="text" id="sage" name="sage" placeholder = "stdent age " required>
        <input type="text" id="sMobno" name="sMobno" placeholder = "student Mobile Mo" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>



<?php


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $sname = $_POST['sname'];
    $sage = $_POST['sage'];
    $sMobno = $_POST['sMobno'];


    if($sage == 0)
    {
        echo " Error valid data ! Enter student age between 1 to 20 " . "<br>";
    }
    elseif($sage < 20)
    {
        echo "Student Name is : " , $sname . "<br>";  
        echo "Student age is : " , $sage . "<br>";  
        echo "Student Mobile No  is : " , $sMobno . "<br>  <br>";  

        echo  "Student Data is Collected " . "<br>";
    }
    else
    {
        echo "data can not be accepted Becoz Student age grater than the 20";
    }
    
}




?>
