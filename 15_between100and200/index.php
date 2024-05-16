<!-- Write an algorithm that receives a number and says if this number is in the range between 100 and 200. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>15_betweeen100And200</title>
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
    if ($numberInput > 100 && $numberInput < 200) {
      echo $numberInput . " Is between 100 and 200";
    }
  }
  ?>
</body>
</html>