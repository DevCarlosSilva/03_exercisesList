<!-- The car dealership “CARANGO VELHO” is selling its vehicles at a discount. Create an algorithm that calculates and displays the discount value and the amount to be paid by the customer for several cars. The discount must be calculated according to the year of the vehicle. Until 2000 - 12% and above 2000 - 7%. The system should ask if you want to continue calculating discount until the answer is: “(N) No”. Enter the total number of cars up to 2000 and the overall total. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>20_carDiscount</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form action="" method="get">
    <input name="name" placeholder="Name">
    <input type="number" name="year" placeholder="Year">
    <input type="number" name="price" placeholder="Price">
    <input type="submit" value="submit">
  </form>
<?php
session_start();
$_SESSION['overallCars'] = $_SESSION['overallCars'];
$_SESSION['upTo2000Cars'] = $_SESSION['upTo2000Cars'];
if (isset($_GET['name']) && !empty(trim($_GET['name'])) && isset($_GET['year']) && !empty(trim($_GET['year'])) && isset($_GET['price']) && !empty(trim($_GET['price']))) {
    $name = $_GET['name'];
    $year = $_GET['year'];
    $price = $_GET['price'];
    if ($year < 2001) {
      $discount = 12;
      $_SESSION['overallCars']++;
      $_SESSION['upTo2000Cars']++;
    } else {
      $discount = 7;
      $_SESSION['overallCars']++;
    }
    echo "<br>Name: $name ($year) - Price: R$ $price -> $discount% = Final price: R$ " . $price - ($price * ($discount / 100));
}
echo '<br>You have calculated the discount of ' . $_SESSION['upTo2000Cars'] . ' cars up to 2000.';
echo '<br>In total, you have calculated the discount of ' . $_SESSION['overallCars'] . ' cars.';
?>