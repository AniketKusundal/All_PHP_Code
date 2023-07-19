<!-- Write A Program For Gratest Number Among Three Number  -->



<?php

if(isset($_POST["Calculate"]))

{
    $a = $_POST['first'];
    $b = $_POST['second'];
    $c = $_POST['third'];
    $d=($a>$b)?(($a>$c)?$a:$c):(($b>$c)?$b:$c);
    
    echo "The Gratest Number Among  This $a , $b , $c Three Number Is " .$d;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gratest Number Among Three</title>
</head>
<body>
        <form action="" method="post">
            <label for="firstno">Enter A First Number :</label>
            <input type="text" name="first" placeholder="Enter Your First Number">


            <label for="secondno">Enter A Second Number</label>
            <input type="text" name="second"  placeholder="Enter Your Second Number">

            <label for="Thirdno">Enter A Third Number</label>
            <input type="text" name="third"  placeholder="Enter Your Third Number">


            <input type="submit" value="ANSWER" name="Calculate">

        </form>
</body>
</body>
</html>