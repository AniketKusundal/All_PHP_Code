<!-- WAP in php name mobile number and email validtaion -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>form validation</title>
</head>
<body>
<?php
// define variables and set to empty values

$nameErr = $emailErr = $genderErr = $mobErr = "";
$name = $email = $gender = $mobno =  "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n=$_POST['name'];
    $m=$_POST["mobno"];
    $e=$_POST["email"];
  if (empty($_POST["name"])) 
  {
    $nameErr = "Name is required";
  } 


elseif (!preg_match("/^[a-zA-z_']*$/ ",$n ))
{
    $nameErr = "Only Charecters Are Allowed";
}
  else {
    $name = test_input($_POST["name"]);
  }
 
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  }
  elseif (filter_var($e, FILTER_VALIDATE_EMAIL))
{
    $emailErr = "Email Is Required";
}
  
  else {
    $email = test_input($_POST["email"]);
  }
    
 

  if (empty($_POST["mobno"])) {
    $mobErr = "Mobile Number Is Required ";
  }

  elseif (preg_match("/^[0-9]{10}*$/ ",$m))
{
    $mobErr = "Email Is Required";
}
  
  else {
    $mobno = test_input($_POST["mobno"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2> Form Validation </h2>
<p><span>* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

  Name: <input type="text" name="name">
  <span >* <?php echo $nameErr;?></span>
  <br><br>


  E-mail: <input type="text" name="email" require>
  <span >* <?php echo $emailErr;?></span>
  <br><br>


 
  Mobile no.: <input type="text" name="mobno" >
  <span >* <?php echo $mobErr;?></span>
  <br>
  <br>


  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span >* <?php echo $genderErr;?></span>
  <br>
  <br>


  
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $mobno;
echo "<br>";
echo $gender;
?>

</body>
</html>