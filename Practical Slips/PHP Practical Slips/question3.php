<!-- Question 3 slip no 5 -->


<!-- b. Write a PHP Script to accept customer name from user and do the following,
i. Transform Customer Name to all Upper-case letters.
ii. Change First character to Upper Case. -->



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Q</title>
    </head>
    <body>
        <h2>Conver text to upper case and first latter to Upper</h2>
    <form action="" method="POST">
        <input type="text" id="string" name="stringg" placeholder = "Enter Name " required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>



<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $nameValue = $_POST['stringg'];
    echo "You Enter String Is " , $nameValue;

    // convert text to upper

    $upper = strtoupper($nameValue);
    echo "Converted To Upper : " , $upper . "<br>";

    $firstChar = ucfirst($nameValue);
    echo "Converted First Char to Upper : " , $firstChar . "<br>";

}









?>