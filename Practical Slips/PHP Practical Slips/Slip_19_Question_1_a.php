<!--
Q.1 Solve all following
a. Write a PHP script, to read a name from user from two text boxes, and display the name by
combining first-name and last-name using concat function. 
-->



<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Read The name from text boxes</title>
</head>
<body>
    <form action="" method="POST">
        <label for="Firstname">User First Name:</label>
        <input type="text" id="Firstname" name="Firstname" required>
        <br><br>
        
        <label for="lastname">User Last Name :</label>
        <input type="text" id="lastname" name="lastname" required>
        <br><br>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>



<?php 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
        $fname = $_POST['Firstname'];
        $lname = $_POST['lastname'];

        echo $fname ,$lname;
    }

?>