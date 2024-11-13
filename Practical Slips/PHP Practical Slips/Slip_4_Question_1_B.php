<!-- 
   b. Write a PHP Script to accept customer name from user and do the following,   
    i. Transform Customer Name to all Upper-case letters.
    ii. Change First character to Upper Case. 
-->

<!DOCTYPE html>
<html>
<head>
    <title>Customer Name Transformation</title>
</head>
<body>
    <h2>Customer Name Transformation</h2>
    <form action="" method="post">
        <input type="text" name="Cname" id="Cname" placeholder = "Enter The Customer Name ">
        <input type = "submit"  name = "submit" value = "Submit">
    </form>
</body>
</html>

<?php


// checking form is submited or not
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $Cname = $_POST['Cname'];
    echo $Cname;

    // Transform Customer Name to all Upper-case letters.
    $upperCase = strtoupper($Cname);
    echo "<br>Customer Name Converted to  Upper Case Name : $upperCase";

    // Change First character to Upper Case
    $firstChar = ucfirst($Cname);
    echo "<br>Customer Name Converted to First Character Upper Case Name : $firstChar";
    
}
?>
