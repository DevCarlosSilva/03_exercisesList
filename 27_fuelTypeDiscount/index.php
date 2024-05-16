<!-- The car dealership “CARANGO” is selling its vehicles at a discount. Create an algorithm that calculates and displays the value of the discount and the amount to be paid by the customer. The discount must be calculated on the value of the vehicle according to the fuel (alcohol – 25%, gasoline – 21% or diesel – 14%). With vehicle value zero, data entry ends. Enter total discount and total paid by customers. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>27_fuelTypeDiscount</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h3>Type -1 into the "Car value" input to end data entry and show final results</h3><br>
  <form action="" method="get">
    <input type="number" name="carValue" placeholder="Car value">
    <select name="fuel">
      <option value="alcohol">Alcohol</option>
      <option value="gasoline">Gasoline</option>
      <option value="diesel">Diesel</option>
    </select>
    <input type="submit" value="Submit">
  </form>
  <br>
  <?php
  session_start();
  $_SESSION['totalDiscount'] = $_SESSION['totalDiscount'];
  $_SESSION['totalPaid'] = $_SESSION['totalPaid'];
  if (isset($_GET['carValue']) && !empty(trim($_GET['carValue']))) {
    if ($_GET['carValue'] == -1) {
      header('Location: finalResults.php');
    }
    $carValue = $_GET['carValue'];
    $fuel = $_GET['fuel'];
    if ($fuel == 'alcohol') {
      $discount = 0.75;
      $discountPercentage = '25%';
    } elseif ($fuel == 'gasoline') {
      $discount = 0.79;
      $discountPercentage = '21%';
    } else {
      $discount = 0.86;
      $discountPercentage = '14%';
    }
    $discountedCarValue = $carValue * $discount;
    echo "Initial car value: R$ $carValue - Fuel type: $fuel ($discountPercentage discount) - Final value: R$ $discountedCarValue";
      $_SESSION['totalDiscount'] += $carValue - $discountedCarValue;
      $_SESSION['totalPaid'] += $discountedCarValue;
  }
  ?>
</body>
</html>