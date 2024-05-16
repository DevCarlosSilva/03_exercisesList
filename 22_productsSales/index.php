<!-- Create an algorithm that receives the cost price and sales price of 40 products. Show as a result whether there was a profit, loss or draw for each product. Enter the average cost price and sales price. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>22_productsSales</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
  $averageCostPrice = 0;
  $averageSalePrice = 0;
  for ($i = 0; $i < 41; $i++) {
    $costPrice = rand(0, 100);
    $salePrice = rand(0, 100);
    $averageCostPrice += $costPrice;
    $averageSalePrice += $salePrice;
    if ($salePrice - $costPrice < 0) {
      $result = 'Loss';
    } elseif ($salePrice - $costPrice == 0) {
      $result = 'Draw';
    } else {
      $result = 'Profit';
    }
    echo "Cost price: R$ $costPrice | Sale price: R$ $salePrice | Result: $result<br>";
  }
  echo '<br>Average cost price: R$ ' . round($averageCostPrice / 40, 2);
  echo '<br>Average sale price: R$ ' . round($averageSalePrice / 40, 2);
  ?>
</body>
</html>