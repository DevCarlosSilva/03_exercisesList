<!-- Make an algorithm that takes “N” numbers and displays positive, negative or zero for each number. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>24_index</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form action="" method="get">
    <input type="number" name="number" placeholder="Number">
    <input type="submit" value="Submit">
  </form>
  <?php
  if (isset($_GET['number'])) {
    $number = $_GET['number'];
    if ($number == 0) {
      echo "<br>The number is 0.";
    } elseif ($number < 0) {
      echo "<br>The number $number is negative.";
    } else {
      echo "<br>The number $number is positive.";
    }
  }
  ?>
</body>
</html>