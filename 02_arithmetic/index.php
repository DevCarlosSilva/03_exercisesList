<!-- Create an algorithm that receives two numbers and shows the addition, subtraction, multiplication and division of the numbers read. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>02_arithmetic</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form action="" method="get">
  <input type="number" name="number1" placeholder="First number">
  <input type="number" name="number2" placeholder="Second number">
  <input type="submit" value="Submit">
  </form>

<?php
if(isset($_GET["number1"]) && !empty($_GET["number1"]) && isset($_GET["number2"]) && !empty($_GET["number2"])){
$number1 = $_GET["number1"];
$number2 = $_GET["number2"];
$sum = $number1 + $number2;
$subtraction = $number1 - $number2;
$multiplication = $number1 * $number2;
$division = $number1 / $number2;
echo "<br>Sum: " . $sum . "<br>" . "Subtraction: " . $subtraction . "<br>" . "Multiplication: " . $multiplication . "<br>" . "Division: " . $division;
}  
?>
</body>
</html>
