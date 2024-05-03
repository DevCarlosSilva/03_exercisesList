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
  <input type="Float" name="celsiusValue" placeholder="Temperature in Celsius (°C)">
  <input type="submit" value="Submit">
</form>

  <?php
  if (isset($_GET["celsiusValue"]) && $_GET["celsiusValue"] != "") {
    $celsiusValue = $_GET["celsiusValue"];
    echo $celsiusValue . "°C in Fahrenheit would be: " . number_format(($celsiusValue * 9/5) + 32, 1) . "°F";
  }
  ?>
  
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<!-- Ler uma temperatura em graus Celsius e apresentá-la convertida em graus Fahrenheit. 
A fórmula de conversão é: y = (x °C × 9/5) + 32 = y °F, 
sendo y a temperatura em Fahrenheit e x a temperatura em Celsius. -->