<!-- Program     for    to   identify   the   data     type     of      given     variable    -->


<?php

// 1  string data type
 $a = "aniket";
 var_dump($a);

// 2   integer data type
 $b =6;
 var_dump($b);

// 3 float data type
 $c = 10.22;
 var_dump($c);

 // 4 boolean data type
 $d = true;
 var_dump($d);


//  5  array data type 
 $e = ["aniket" , "07"];
var_dump($e) ;

//  6 null data type
 $f = null;
 var_dump($f);


//  7 object data type
class bike {  
    function model() {  
         $model_name = "Royal Enfield";  
         echo "Bike Model: " .$model_name;  
       }  
}  
        $obj = new bike();  
        $obj -> model(); 


        var_dump($obj);
?>

