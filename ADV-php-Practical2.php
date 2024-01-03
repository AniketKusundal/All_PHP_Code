//WAP IN PHP FOR FORM VALIDATION USING $_SERVER (AND HTML SPECIAL CHARS)

<html>
    <head>
        <title>My form validtaion </title>
    </head>
    <body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> ">

            Name:<input type = "text" name="name"> <br>
            Mobile: <input type="text" name="mobno"><br> 

            Gender:
                <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" value="other"> Other 
            <br>
            Address <textarea name="add" rows="5" cols="30"></textarea><br>
            <input type="submit" name="send" value="Submit" >
    </form>

        <?php
            $n=$m=$g=$a="";


            if ($_SERVER["REQUEST_METHOD"] == "POST") {      
             echo "Your data";
            echo"<br>";
            $n=test_input($_POST["name"]);
            $m=test_input($_POST["mobno"]);
            $g=test_input($_POST["gender"]);
            $a=test_input($_POST["add"]); 
          } 

            function test_input($data) {
               trim($data);
                stripcslashes($data);
                htmlspecialchars($data);
                return $data;     
             }

            echo  $n;
            echo "<br>";

            echo $m;
            echo "<br>";

            echo $g;
            echo "<br>";
            
            echo $a;
            echo "<br>";
        ?>
    </body>
</html>