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
    <input type="number" name="numberInput" placeholder="Type a number">
    <input type="number" name="numberInput2" placeholder="Type a number">
    <input type="submit" value="Submit">
</form>

  <?php
  if (isset($_GET["numberInput"]) && $_GET["numberInput"] != "" && isset($_GET["numberInput2"]) && $_GET["numberInput2"] != "") {
    $numberInput = $_GET["numberInput"];
    $numberInput2 = $_GET["numberInput2"];
    if ($numberInput > $numberInput2) {
      echo $numberInput . " Is bigger than " . $numberInput2;
    } elseif ($numberInput == $numberInput2) {
      echo "The numbers are the same";
    } else {
      echo $numberInput2 . " Is bigger than " . $numberInput;
    }
  }
  ?>
  
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<!-- Escrever um algoritmo que leia dois valores inteiro distintos e informe qual é o maior. -->