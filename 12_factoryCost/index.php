<!-- The cost to the consumer of a new car is the sum of the factory cost, the distributor's percentage and taxes (taxes applied first to the factory cost, and then the distributor's percentage to the result). Assuming that the distributor's percentage is 28% and taxes are 45%. Write an algorithm that reads the factory cost of a car and reports the cost to the consumer. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>12_factoryCost</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form action="" method="get">
    <input type="Float" name="factoryPrice" placeholder="Car factory price (R$)">
    <input type="submit" value="Submit">
  </form>
  <?php
  if (isset($_GET["factoryPrice"]) && $_GET["factoryPrice"] != "") {
    $factoryPrice = number_format($_GET["factoryPrice"], 1);
    $taxedFactoryPrice = $factoryPrice + ($factoryPrice / 100 * 45);
    $taxedDistributorPrice = $taxedFactoryPrice + ($taxedFactoryPrice / 100 * 28);
    echo "The car's factory price being R$" . $factoryPrice . " and with taxes of 45%, the distributer gets the vehicle at R$" . $taxedFactoryPrice . ", adding his own pecentage (28%), the car price ends up at R$" . $taxedDistributorPrice;
  }
  ?>
</body>
</html>