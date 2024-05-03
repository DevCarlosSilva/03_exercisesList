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
  
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<!-- O custo ao consumidor de um carro novo é a soma do custo de fábrica com a percentagem do distribuidor e dos
impostos (aplicados, primeiro os impostos sobre o custo de fábrica, e depois a percentagem do distribuidor sobre o
resultado). Supondo que a percentagem do distribuidor seja de 28% e os impostos 45%. Escrever um algoritmo que
leia o custo de fábrica de um carro e informe o custo ao consumidor do mesmo. -->