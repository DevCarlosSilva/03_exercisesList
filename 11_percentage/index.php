<!-- Create an algorithm that receives the cost price of a product and shows the sales value. It is known that the cost price will be increased according to a percentage informed by the user. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>11_percentage</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form action="" method="get">
    <input type="Float" name="productPrice" placeholder="Product price (R$)">
    <input type="Float" name="percentage" placeholder="Percentage (%)">
    <input type="submit" value="Submit">
  </form>
  <?php
  if (isset($_GET["productPrice"]) && $_GET["productPrice"] != "" && isset($_GET["percentage"]) && $_GET["percentage"] != "") {
    $productPrice = $_GET["productPrice"];
    $percentage = $_GET["percentage"];
    $percentageValue = ($productPrice / 100) * $percentage;
    $finalPrice = $productPrice + $percentageValue;
    echo "If the product costs R$" . $productPrice . " and has a percentage of " . $percentage . "%, it's final price will be R$" . $finalPrice;
  }
  ?>
</body>
</html>