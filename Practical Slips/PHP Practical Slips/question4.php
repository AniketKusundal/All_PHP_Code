<!-- Slip 8 Question2 b -->

<!-- b. Write a PHP script to test whether a number is greater than 30, 20 or 10 using ternary operator -->


<?php
$num1 = 52;
$num2 = 41;
$num3 = 10;


$largest = ($num1 > $num2)
?($num1 >$num3 ? $num1 : $num2)
:($num2 > $num3 ? $num2 : $num3);


echo 'Largest amoung three is ' , $largest ;


?>