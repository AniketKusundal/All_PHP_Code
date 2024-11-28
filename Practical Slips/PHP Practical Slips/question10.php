<!-- Slip no 10 -->

<!-- . Write a PHP that accepts a string from user. Pass this string as parameter to a function name
‘check vowel’ on button click event and return the count of the number of vowels within thestring -->

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Count Vowels</title>
</head>
<body>

    <h2>Enter a String to Count Vowels</h2>

    <!-- Form to take user input -->
    <form method="POST">
        <input type="text" id="inputString" name="inputString" placeholder="Enter The String">
        <button type="submit" name="submit">Check Vowels</button>
    </form>

    <?php
    // Function to check vowels in the string
    function checkVowel($str)
    {
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        $count = 0;  // Initialize vowel count to 0

        // Convert string to lowercase for case-insensitive comparison
        $str = strtolower($str);

        // Loop through the string and count vowels
        for ($i = 0; $i < strlen($str); $i++) {
            if (in_array($str[$i], $vowels)) {
                $count++; // Increment count if a vowel is found
            }
        }
        return $count;
    }

    // Check if form was submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $inputString = $_POST['inputString']; // Get the input string from the form

        // Call the function to count vowels
        $vowelCount = checkVowel($inputString);

        // Display the result
        echo "<h3>Input String: $inputString</h3>";
        echo "<h3>Vowel Count: $vowelCount</h3>";
    }
    ?>

</body>
</html>
