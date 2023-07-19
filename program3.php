<!--   Program     For   Compound   Intrest   In    PHP -->


<?php
        if(isset($_POST["calculate"]))

        {
            $p=$_POST["principle"];
            $r=$_POST["rateofintrest"];
            $t=$_POST["time"];
            $ci=$p*((1+$r/100)^$t);

        
            echo "Compound   Intrest=".$ci;
        
        }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compound Intrest</title>
</head>
<body>
        <form action="" method="POST">

        <label for="principle">Principle Amount</label>
        <input type="text" name="principle">

        <label for="rateofintrest">Rate OF Intrest</label>
        <input type="text" name="rateofintrest">


        <label for="time">Time</label>
        <input type="text" name="time">


        <input type="submit" name="calculate" value="Calculate Compund intrest">
        </form>
</body>
</html>
