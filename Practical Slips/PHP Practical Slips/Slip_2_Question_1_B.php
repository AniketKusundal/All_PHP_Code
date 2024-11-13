<!--
    b. Create a HTML form that accepts user email. Write a PHP program to check whether user
    email address is valid or not. Display proper message.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Email Validation Form</title>
</head>
<body>
    <h2>Email Validation Form</h2>
    <form action="" method="POST">
        <label for="email">Enter your email:</label>
        <input type="text" id="email" name="email" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>


<?php

// check  if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];


    // Validate email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "The email address '$email' is valid.";
    } else {
        echo "The email address '$email' is invalid. Please enter a valid email.";
    }
}
?>
