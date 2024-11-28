<!-- Slip no 7 -->

<!-- write a PHP script, Accept First Name and Last Name from user. Display the
information entered by users. [Hint: use alert and prompt dialog box] -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Name</title>
    <script type="text/javascript">
        // JavaScript function to prompt for user input and display an alert
        function getUserInfo() {
            var firstName = prompt("Please enter your First Name:");
            var lastName = prompt("Please enter your Last Name:");

            // If both first name and last name are entered, submit the form
            if (firstName && lastName) {
                document.getElementById("firstName").value = firstName;
                document.getElementById("lastName").value = lastName;
                document.getElementById("userForm").submit(); // Submit the form to PHP
            } else {
                alert("Please enter both your First Name and Last Name.");
            }
        }
    </script>
</head>
<body>

    <h2>Enter Your Name</h2>

    <!-- Form to send first name and last name to PHP -->
    <form id="userForm" method="POST">
        <input type="hidden" id="firstName" name="firstName">
        <input type="hidden" id="lastName" name="lastName">
    </form>

    <button type="button" onclick="getUserInfo()">Enter Your Name</button>

    <?php
    // Check if form is submitted and display the user information
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];

        if (!empty($firstName) && !empty($lastName)) {
            echo "<h3>You entered:</h3>";
            echo "<p>First Name: $firstName</p>";
            echo "<p>Last Name: $lastName</p>";
        } else {
            echo "<p>Error: Please enter both your first and last names.</p>";
        }
    }
    ?>

</body>
</html>
