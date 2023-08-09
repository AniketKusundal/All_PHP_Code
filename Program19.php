<!-- Write A Program In PHP To Display Elemnt Of Associative Array -->
<?php

    $rollno = array( "Aniket" => "20" ,"jack" => "10" , "jon" => "5" , "oggy" => "4" , "bob" => "2" , "cockk" => "7" , "mrx" => "1" , "max" => "1");

   foreach($rollno as $b=>$c)
    {
        echo "The Student Name "." $b "." $c" . "<br>";

    }

   echo "Total Student " . count($rollno) . "<br>";
    
?>
