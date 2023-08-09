<!-- Write A Program In PHP To Count Array Elemnt And Display Array Element -->

<?php

    $p = array("Tiger" , "Loin" , "Cat" , "Dog" , "Wolf");
    $a = count($p);
    echo "Length of array = $a <br> ";
    
    for ($i=0; $i < $a ; $i++) { 
         
        echo $p[$i]. "<br>";
    }

?>