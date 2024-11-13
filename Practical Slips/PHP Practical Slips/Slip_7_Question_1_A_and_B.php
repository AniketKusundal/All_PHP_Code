<!-- 
Q.1 Solve all following
    a. Write a PHP script, Accept First Name and Last Name from user. Display the
    information entered by users. [Hint: use alert and prompt dialog box]

    b. Write a program for passing data to multiple views, one view contains Product
    (name,quantity)and other view contains (product price ) 
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Display In Alert Or prompt dialog box</title>
    <script>
        function getUserData()
        {

            let fname = prompt("Plese enter your first name")
            let lname = prompt("Plese enter your last name")
            
            alert("First Name Is :" + fname + "\nlast Name is : " + lname)
            
            
            document.getElementById("fname").value = fname;
            document.getElementById("lname").value = lname;
            document.getElementById("userForm").submit();
        }

    </script>
</head>
<body onload="getUserData()">
    <h2>Display In Alert Or prompt dialog box</h2>
    <form action="" method="POST">
        <label for="name">Enter your First And Last Name :</label><br><br>
        <input type="text" id="FLname" name="FLname" required placeholder = "Enter Your First Name">
        <input type="text" id="FLname" name="Lname" required placeholder = "Enter Your Last Name">
        <button type="submit">Submit</button>
    </form>
</body>
</html>


<?php
        
    // Retrieve the first name and last name from the form
    $fname = $_POST['FLname'];
    $lname = $_POST['Lname'];
        
    // Display the user information
    echo "<h2>User Information</h2>";
     echo "First Name: " . htmlspecialchars($fname) . "<br>";
    echo "Last Name: " . htmlspecialchars($lname) . "<br>";
?>
    