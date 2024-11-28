
<!-- SLIP   2  QUESTION 1 B -->


<!-- b. Create a HTML form that accepts user email. Write a PHP program to check whether user
email address is valid or not. Display proper message. -->


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

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = $_POST['email'];
    echo "You Entered Email is :" , $email . "<br>";
    
    if(filter_var($email , FILTER_VALIDATE_EMAIL))
    {
        echo "The email Adress " , $email , " Is Valid" . "<br>";
    }
    else
    {
        echo "The email adress" , $email , " Not Valid  , Plese Enter Correct Email";
    }
}

?>

<!-- end SLIP 2  QUESTION 1 B -->