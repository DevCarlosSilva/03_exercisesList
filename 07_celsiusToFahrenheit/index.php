<!-- Read a temperature in degrees Celsius and display it converted into degrees Fahrenheit. The conversion formula is:
F = C x 1.8 + 32, with F being the temperature in Fahrenheit and C being the temperature in Celsius. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>07_celsiusToFahrenheit</title>
  <link rel="stylesheet" href="style.css">
  </head>
</head>
<body>
  <form action="" method="get">
    <input type="Float" name="celsiusValue" placeholder="Temperature in Celsius (°C)">
    <input type="submit" value="Submit">
  </form>
  <?php
  if (isset($_GET["celsiusValue"]) && $_GET["celsiusValue"] != "") {
    $celsiusValue = $_GET["celsiusValue"];
    echo $celsiusValue . "°C in Fahrenheit would be: " . number_format(($celsiusValue * 9/5) + 32, 1) . "°F";
  }
  ?>
</body>
</html>