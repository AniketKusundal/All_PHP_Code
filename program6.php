<!--  write a  program in php to use string string manipulator funtion -->
<?php
$a="Aniket Kusundal";
echo " The length Of  string is ".strlen($a) ."<br>";
echo "The Words  in given string is ".str_word_count($a) ."<br>";
echo "Reverse String Of ".strrev($a) . "<br>";
echo "Postion Of The String Is ".strpos($a , "Kusundal") . "<br>";
echo "Strings Replace ".str_replace("Aniket","Anni", $a) . "<br>";

?>