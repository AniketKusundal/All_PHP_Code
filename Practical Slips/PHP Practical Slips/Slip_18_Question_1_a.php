<!-- 
write a PHP program to compare the values of password and confirmed password fields
,display message accordingly. Also performs the validation to check if any of the field is
empty.
 -->


<?php
// Function to check password match and field emptiness
function validatePassword($password, $confirmPassword) {
    if (empty($password) || empty($confirmPassword)) {
        return "Both password fields are required!";
    } elseif ($password !== $confirmPassword) {
        return "Passwords do not match!";
    } else {
        return "Passwords match!";
    }
}

// Sample input
$password = $_POST['password'] ?? '';
$confirmPassword = $_POST['confirm_password'] ?? '';

// Display validation result
$message = validatePassword($password, $confirmPassword);
echo $message;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Password Validation</title>
</head>
<body>
    <form action="" method="POST">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        <br><br>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>
