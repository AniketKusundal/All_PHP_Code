<!-- wite a program in PHP to find gratest number among three number using nested if-else -->

<?php

$a = 2;
$b = 8;
$c = 7;


if ($a > $b && $a > $c)  {
    echo "A Is Grater " . $a;
}

elseif ($b>$c && $b>$c) {
    echo "B is Grater " . $b;
}


else {
    echo "C Is Grater " . $c;
}