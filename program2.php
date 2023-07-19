<!--  PROGRAM   FOR    SIMPLE    INTREST   In   PHP -->


<?php

if(isset($_POST["calculate"]))

{
    $p=$_POST["principle"];
    $r=$_POST["rateofintrest"];
    $n=$_POST["noofyear"];
    $i=($p*$r*$n)/100;

    echo "Simple Intrest=".$i;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Intrest</title>
</head>
<body>
    
        <form action="" method="POST">
            <label for="principle">Principle</label>
            <input type="text"  name="principle" ><br>
            <label for="rateofintrest">Rate Of Intrest</label>
            <input type="text" name="rateofintrest"><br>
            <label for="noofyear">No Of Year</label>
            <input type="text" name="noofyear"><br>
            <input type="submit" value="CALCULATE" name="calculate">
        </form>
</body>
</html>