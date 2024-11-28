<!-- Slip number 10  -->

<!-- Design a HTML form to accept a string. Write a PHP function to reverse a string. -->



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Q</title>
    </head>
    <body>
        <h2>reverse the string</h2>
    <form action="" method="POST">
        <input type="text" id="string" name="stringg" placeholder = "Enter String value " required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>



<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $StringVal = $_POST['stringg'];
    echo "Entered String is : " , $StringVal . "<br>";

    $stringrevse = strrev($StringVal);
    echo "Reversed String is : " , $stringrevse . "<br>";

}

?>