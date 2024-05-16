<!-- Create an algorithm that receives an amount that was deposited and displays the amount with income after one month. Consider the savings interest fixed at 0.70% a.m. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>09_monthlyRevenue</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form action="" method="get">
    <input type="Float" name="amountDeposited" placeholder="Amount deposited">
    <input type="submit" value="Submit">
  </form>
  <?php
  if (isset($_GET["amountDeposited"]) && $_GET["amountDeposited"] != "") {
    $amountDeposited = $_GET["amountDeposited"];
    $amountRevenued = $amountDeposited * 0.007;
    $totalAmount = $amountDeposited + $amountRevenued;
    echo "After a month, the deposited amount (R$" . $amountDeposited . ") had a revenue of: R$" . $amountRevenued . ", ending in: R$" . $totalAmount;
  }
  ?>
</body>
</html>