<!-- 
Write a PHP that accepts a string from user. Pass this string as parameter to a function name
‘check vowel’ on button click event and return the count of the number of vowels within the string 

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Check Vowel Count</title>
</head>
<body>
    <form action="" method="POST">
        <label for="checkVowel">Enter a string to check vowel count:</label><br>
        <input type="text" id="checkVowel" name="checkVowel" required placeholder="Enter String">
        <br><br>
        
        <button type="submit">Submit</button>
    </form>

    <?php
    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the input string from the form
        $inputString = $_POST['checkVowel'] ?? '';

        // Define the function to count vowels
        function checkVowel($inputString) {
            // Convert the string to lowercase for easy comparison
            $inputString = strtolower($inputString);

            // Initialize a variable to count vowels
            $vowelCount = 0;

            // Loop through each character in the string
            for ($i = 0; $i < strlen($inputString); $i++) {
                // Check if the character is a vowel
                if (in_array($inputString[$i], ['a', 'e', 'i', 'o', 'u'])) {
                    $vowelCount++;
                }
            }

            return $vowelCount;
        }

        // Call the function and display the result
        $vowelCount = checkVowel($inputString);
        echo " You Entered String is : " ,  $inputString;
        echo "<h3>Number of vowels in the entered string: $vowelCount</h3>";
    }
    ?>
</body>
</html>
