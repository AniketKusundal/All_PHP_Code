<!-- Write A Program In PHP To Demonstrate The Function Using Call By Refrance -->

<?php

    $a = 99;
    $b = 100;

    function swap (&$x , &$y)
    {
        $t = $x;
        $x = $y;
        $y = $t;

        echo "Inside Function <br> ";
        echo "a = ". $x . "<br>";
        echo "b = " . $y . "<br>";
    
    }

    echo "Outside The Function Before calling A Function <br>";
    echo "a = " . $a . "<br>";
    echo "b = " . $b . "<br>";

    swap($a , $b);

    echo " OutSide function After Calling Function <br>";
    echo "a = " . $a . "<br>";
    echo "b = " . $b . "<br>";


?>