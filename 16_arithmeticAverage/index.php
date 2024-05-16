<!-- Write an algorithm that reads the name and three grades obtained by a student during the semester. Calculate your average (arithmetic), enter the name and mention approved (average >= 7), Failed (average <= 5) and Recovery (average between 5.1 and 6.9). -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>16_arithmeticAverage</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="" method="get">
  <input name="name" placeholder="Name" >
  <input type="number" name="grade1" placeholder="First grade">
  <input type="number" name="grade2" placeholder="Second grade">
  <input type="number" name="grade3" placeholder="Third grade">
  <input type="submit" value="Submit">
</form>
<?php
if (isset($_GET["grade1"]) && !empty($_GET["grade1"]) && isset($_GET["grade2"]) && !empty($_GET["grade2"]) &&
    isset($_GET["grade3"]) && !empty($_GET["grade3"]) && isset($_GET["name"]) && !empty(trim($_GET["name"]))) {
      $name = $_GET["name"];
      $grade1 = $_GET["grade1"];
      $grade2 = $_GET["grade2"];
      $grade3 = $_GET["grade3"];
      $average = ($grade1 + $grade2 + $grade3) / 3;
      if ($average <= 5) {
        $state = 'failed!';
      } elseif ($average <= 6) {
        $state = 'recovery!';
      } else {
        $state = 'approved!';
      }
      echo '<br> You, ' . $name . ', are ' . $state . ' (' . round($average, 1) . ')';
}
?>
</body>
</html>