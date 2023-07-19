<!-- Write A program For Greatest Number Among Two Number Using Conditional Oprator -->
<?php
if(isset($_POST["Answer"]))

{
    $a = $_POST['first'];
    $b = $_POST['second'];
    $c = ($a>$b)?$a:$b;

    echo "The Greatest Number Among This $a And $b  Two Number Is ".$c;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gratest Number Among Two Number</title>
</head>
<body>
        <form action="" method="post">
            <label for="firstno">Enter A First Number :</label> &nbsp;
            <input type="text" name="first" placeholder="Enter Your First Number">
            <label for="secondno">Enter A Second Number</label>
            <input type="text" name="second"  placeholder="Enter Your Second Number">
            <input type="submit" value="ANSWER" name="Answer">

        </form>
</body>
</html>