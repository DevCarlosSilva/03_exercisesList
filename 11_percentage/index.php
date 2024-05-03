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
    <input type="Float" name="productPrice" placeholder="Product price (R$)">
    <input type="Float" name="percentage" placeholder="Percentage (%)">
    <input type="submit" value="Submit">
</form>

  <?php
  if (isset($_GET["productPrice"]) && $_GET["productPrice"] != "" && isset($_GET["percentage"]) && $_GET["percentage"] != "") {
    $productPrice = $_GET["productPrice"];
    $percentage = $_GET["percentage"];
    $percentageValue = ($productPrice / 100) * $percentage;
    $finalPrice = $productPrice + $percentageValue;
    echo "If the product costs R$" . $productPrice . " and has a percentage of " . $percentage . "%, it's final price will be R$" . $finalPrice;
  }
  ?>
  
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<!-- Faça um algoritmo que receba o preço de custo de um produto e mostre o valor de venda. Sabe-se que o preço de
custo receberá um acréscimo de acordo com um percentual informado pelo usuário. -->