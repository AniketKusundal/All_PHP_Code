<!--
   Write a PHP script to test whether a number is greater than 30, 20 or 10 using ternary operator
-->

<?php
$num1 = 10;
$num2 = 20;
$num3 = 30;


echo $num1 . '<br>';
echo $num2 . '<br>';
echo $num3 . '<br>';

$largest = ($num1 > $num2) 
    ?($num1 > $num3 ? $num1 : $num3) 
    :($num2 > $num3 ? $num2 : $num3);

    echo "Larest Among the Three Number is " , $largest;

?>