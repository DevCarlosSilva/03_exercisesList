<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
</head>
<body>
  <form action="" method="GET">
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
  
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<!-- Faça um algoritmo que receba um valor que foi depositado e exiba o valor com rendimento após um mês.
Considere fixo o juro da poupança em 0,70% a. m. -->