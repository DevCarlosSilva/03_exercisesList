<!-- Write an algorithm that reads two different integer values and reports which is larger. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>14_whichIsBigger</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form action="" method="get">
    <input type="number" name="numberInput" placeholder="Type a number">
    <input type="number" name="numberInput2" placeholder="Type a number">
    <input type="submit" value="Submit">
  </form>
  <?php
  if (isset($_GET["numberInput"]) && $_GET["numberInput"] != "" && isset($_GET["numberInput2"]) && $_GET["numberInput2"] != "") {
    $numberInput = $_GET["numberInput"];
    $numberInput2 = $_GET["numberInput2"];
    if ($numberInput > $numberInput2) {
      echo $numberInput . " Is bigger than " . $numberInput2;
    } elseif ($numberInput == $numberInput2) {
      echo "The numbers are the same";
    } else {
      echo $numberInput2 . " Is bigger than " . $numberInput;
    }
  }
  ?>
</body>
</html>