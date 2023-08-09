<!-- Write A Program In PHP To Display Array Elementof Multi Diantional Array -->


<?php

    $ani = array (array   ("aniket" , 20 , 50000),
            array   ("anil" , 10 , 50000),
            array   ("anoi" , 50 , 20000),
            array   ("ronit" ,30 , 90000),);

                echo "Student Details <br>" ;
                for ($i=0; $i<3; $i++)

                {
                  
                    for ($j=0; $j<3; $j++) { 
                        
                        echo "&nbsp &nbsp";
                        echo $ani[$i][$j];

                    }

                    echo "<br>";
                }

?>