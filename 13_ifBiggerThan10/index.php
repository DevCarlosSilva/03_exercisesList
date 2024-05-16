<!-- Write an algorithm that receives a number and displays a message if this number is greater than 10. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>13_ifBiggerThan10</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form action="" method="get">
    <input type="Float" name="numberInput" placeholder="Type a number">
    <input type="submit" value="Submit">
  </form>
  <?php
  if (isset($_GET["numberInput"]) && $_GET["numberInput"] != "") {
    $numberInput = $_GET["numberInput"];
    if ($numberInput > 10) {
      echo $numberInput . " Is bigger than 10";
    }
  }
  ?>
</body>
</html>