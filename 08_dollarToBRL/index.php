<!-- Develop an algorithm that displays the conversion value in reais (R$) of a value read in dollars (US$). The algorithm must request the value of the dollar exchange rate and also the amount of dollars available to the user. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>08_dollarToBrl</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form action="" method="get">
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
</body>
</html>