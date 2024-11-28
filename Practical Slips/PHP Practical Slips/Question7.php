<!-- Slip Number 19 -->

<!-- Q.1 Solve all following
a. Write a PHP script, to read a name from user from two text boxes, and display the name by
combining first-name and last-name using concat function -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Concatenate Names</title>
</head>
<body>
    <h2>Enter Your First and Last Name</h2>
    <form method="POST">
        <input type="text" name="str1" placeholder="First Name" required>
        <input type="text" name="str2" placeholder="Last Name" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $str1 = $_POST['str1'];
        $str2 = $_POST['str2'];


        echo "Before Concat : " , $str1 , $str2 . "<br> <br>";
        echo "After Concat : " . $str1 . " " . $str2;
    }
    ?>
</body>
</html>
