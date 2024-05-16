<!-- Make an algorithm that reads two numbers and identifies whether they are the same or different. If they are the same, print a message saying that they are the same. If they are different, inform which number is the largest, and a message that they are different. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>25_numberComparison</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form action="" method="get">
    <input type="number" name="number1" placeholder="First number">
    <input type="number" name="number2" placeholder="Second number">
    <input type="Submit" value="Submit">
  </form>
  <br>
  <?php
  if (isset($_GET['number1']) && isset($_GET['number2'])) {
  $number1 = $_GET['number1'];
  $number2 = $_GET['number2'];
  if ($number1 == $number2) {
    echo "$number1 Is equal to $number2";
  } else {
    if ($number1 - $number2 > 0) {
      echo "$number1 Isn't equal to $number2 and $number1 is bigger.";
    } else {
      echo "$number1 Isn't equal to $number2 and $number2 is bigger.";
    }
  }
  }
  ?>
</body>
</html>