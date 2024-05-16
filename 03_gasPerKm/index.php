<!-- Write an algorithm to determine the average consumption of a car, providing the total distance traveled by the car and the total amount of fuel used. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>03_gasPerKm</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="" method="get">
  <input type="number" name="distance" placeholder="Distance (Km)">
  <input type="number" name="fuel" placeholder="Fuel (L)">
  <input type="submit" value="Submit">
</form>

<?php
if(isset($_GET["distance"]) && !empty($_GET["distance"]) && isset($_GET["fuel"]) && !empty($_GET["fuel"])){
  $distance = $_GET["distance"];
  $fuel = $_GET["fuel"];
  $averageConsuption = $distance / $fuel;
  echo "<br>Your average consuption is: " . $averageConsuption . " Km/L";
}
?>
</body>
</html>
