<!-- Make an algorithm that reads a number from 1 to 5 and writes it out. If the user enters a number that is not in this range, the following message will be displayed: invalid number. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>26_writeItOut</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h3>Write a number between 1 and 5</h3>
  <br>
  <form action="" method="get">
    <input type="number" name="number" min="1" max="5" placeholder="Number">
    <input type="submit" value="Submit">
  </form>
  <br>
  <?php
  if (isset($_GET['number']) && !empty($_GET['number'])) {
    $number = $_GET['number'];
    if ($number < 1 || $number > 5) {
      echo 'Invalid number.';
    } elseif ($number == 1) {
      echo 'One';
    } elseif ($number == 2) {
      echo 'Two';
    } elseif ($number == 3) {
      echo 'Three';
    } elseif ($number == 4) {
      echo 'Four';
    } elseif ($number == 5) {
      echo 'Five';
    }
  }
  ?>
</body>
</html>