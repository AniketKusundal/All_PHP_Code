<!-- Write A Program For Defualt Argument  -->

<?php

function add ($a=1, $b=3)
{
    $c = $a + $b;
    echo "Add = " .$c;
}

    add(10 , 5);
    add(2 , 3);
    add();
?>