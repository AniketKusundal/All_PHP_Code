<!-- b. Write a PHP program to declare three variable and print maximum among them. -->

<?php 

$num1 = 20;
$num2 = 60;
$num3 = 100;


if ($num1 > $num2 || $num1 > $num3)
{
    echo $num1 , " Is greater than the " , $num2 , " and " , $num3 .  "<br>";
}
elseif ($num2 > $num1 || $num2 > $num3) {
    echo $num2 , " is grater than the " , $num1 , " and " , $num3  . "<br>";
}
else
{
    echo $num3 , " is greater than the " , $num1 , " and " , $num2 , "<br>";
}
?>