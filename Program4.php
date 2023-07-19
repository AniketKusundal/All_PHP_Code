<!-- Program    For    Quadratic   Equation -->

<?php

$a=1;
$b=1;
$c=5;

$a1=1;
$b1=1;
$c1=5;


$d=(($a*$b1)-($a1*$b));
echo "d= " .$d;
$dx=(($c*$b1)-($c1*$b));
echo "dx = " .$dx;

$dy=(($a*$c1)-($a1*$c));
echo "dy = " .$dy;


$x=$dx/$d;
$y=$dy/$d;
echo "x = " .$x; 
echo "y = " .$y;
?>