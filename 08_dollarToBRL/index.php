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
  <input type="Float" name="valueDollar" placeholder="Value in dollars (US$)">
  <input type="Float" name="dollarExchangeRate" placeholder="Dollar exchange rate">
  <input type="submit" value="Submit">
</form>

  <?php
  if (isset($_GET["valueDollar"]) && $_GET["valueDollar"] != "" && isset($_GET["dollarExchangeRate"]) && $_GET["dollarExchangeRate"] != "") {
    $valueDollar = $_GET["valueDollar"];
    $dollarExchangeRate = $_GET["dollarExchangeRate"];
    echo "US$" . number_format($valueDollar, 2) . " in Brazilian real would be: R$" . number_format($valueDollar * $dollarExchangeRate, 2);
  }
  ?>
  
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<!-- Elaborar um algoritmo que efetue a apresentação do valor da conversão em real (R$) de um valor lido em dólar
(US$). O algoritmo deverá solicitar o valor da cotação do dólar e também a quantidade de dólares disponíveis com
o usuário. -->