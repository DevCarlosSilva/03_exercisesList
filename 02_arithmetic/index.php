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
  <input type="number" name="numero1">
  <input type="number" name="numero2">
  <input type="submit" value="Enviar">
  </form>

  <?php
  if(isset($_GET["numero1"]) && isset($_GET["numero2"])){
  $numero1 = $_GET["numero1"];
  $numero2 = $_GET["numero2"];
  $soma = $numero1 + $numero2;
  $subtracao = $numero1 - $numero2;
  $multiplicacao = $numero1 * $numero2;
  $divisao = $numero1 / $numero2;
  echo "Soma: " . $soma . "<br>" . "Subtração: " . $subtracao . "<br>" . "Multiplicação: " . $multiplicacao . "<br>" . "Divisão: " . $divisao;
  }  
  ?>
  
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>