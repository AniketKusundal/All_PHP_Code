<!-- Write a PHP program to declare three variable and print maximum among them -->

<?php

$a = 50;
$b = 90;
$c = 10;

echo 'Maximum between Three Variables<br>';
echo 'Variable 1 is ' , $a , '<br>';
echo 'Variable 2 is ' , $b , '<br>';
echo 'Variable 3 is ' , $c , '<br>';

if ($a > $b && $a > $c) 
{
    echo "Variable 1 is greater than Variable 2 and Variable 3";
}

 else if ($b > $c && $b > $a)
{
    echo 'Variable 2 is greater than Variable 1 and Variable 3';
}

else 
{
    echo 'Variable 3 is greater than Variable 1 and Variable 2';
}
?>
