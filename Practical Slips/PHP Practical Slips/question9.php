<!--  Slip number 22 -->

<!-- 
Q.1 Solve all following
a. Write a PHP script, to compare the values of password and confirmed password fieldsand
display message accordingly. Also perform the validation to check if any of the field is empty. -->



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Slip No 22</title>
    </head>
    <body>
        <h2>Password and Confirm Password</h2>
    <form action="" method='POST'>
        <input type="text" id="pass" name="pass" placeholder = "Enter Password  " >
        <input type="text" id="Cpass" name="Cpass" placeholder = "Confirm Password  " >
        <button type="submit">Submit</button>
    </form>
</body>
</html>


<?php



if($_SERVER['REQUEST_METHOD']  == 'POST')
{
    $pass = $_POST['pass'];
    $Cpass = $_POST['Cpass'];




    if (empty($pass) && empty($Cpass)) 
    {
        echo "Both fields are empty. Please fill out the form.";
    }
    elseif (empty($pass)) 
    {
        echo "Enter password.";
    } 
    elseif (empty($Cpass)) 
    {
        echo "Enter confirm password.";
    }

    elseif($pass === $Cpass)
    {
        echo "Password Match";
    }
    else
    {
        echo "Password Does Not Match ";
    }


}

?>