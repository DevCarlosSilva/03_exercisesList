<!-- Create an algorithm that receives a number and displays a message if this number is greater than 80, less than 25 or equal to 40. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>23_numCheck</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form action="" method="get">
    <input type="number" name="number" placeholder="Number">
    <input type="submit" value="Submit">
  </form>
  <?php
  if (isset($_GET['number']) && !empty($_GET['number'])) {
    $number = $_GET['number'];
    if ($number > 80 || $number < 25 || $number == 40) {
      echo "<br>Hello world!";
    }
  }
  ?>
</body>
</html>