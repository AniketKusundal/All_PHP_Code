<!-- Slip no 22 -->

<!-- write a PHP script to accept the number from user and write a function to calculate the
factorial of given number (non-negative integer). The number should be passed as argument
to function. -->




<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Slip No 22</title>
    </head>
    <body>
        <h2>Factorial of number</h2>
    <form action="" method='POST'>
        <input type="text" id="number" name="number" placeholder = "Enter Number  " required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>





<?php



if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $number = intval($_POST['number']);
   if($number < 0)
   {
        echo "Plese Enter The Non Negative Number";
   }
   else
   {
        $result =  factorial($number);
        echo " Factorial of $number is $result";
   }



}

function factorial($num)
{
    if ($num == 0 || $num == 1) {
        return 1;
    }
    else
    {
        return $num * factorial($num -1);
    }
}

factorial()


?>