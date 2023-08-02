<!-- Write A Program In PHP For Factorial Number Using Function ( Demonstrate Recursion Of Function ) -->

<?php

    $a = 3;
    function facto($a)
    {
        if ($a==1) {
            
            return 1;
        }
        else{
            return $a*facto($a-1);
        }
    }

    echo "Factorial Number Is =" .facto($a);
?>