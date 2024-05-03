<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
</head>
<body>
  <?php
  $variableA = "Admin";
  $variableB = 123;
  var_dump($variableA);
  var_dump($variableB);
  echo "Changing values... ";
  $variableACopy = $variableA;
  $variableA = $variableB;
  $variableB = $variableACopy;
  echo "Done!";
  var_dump($variableA);
  var_dump($variableB);
  ?>
  
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<!-- Ler dois valores para as variáveis A e B, e efetuar as trocas dos valores de forma que a variável A passe a possuir
o valor da variável B e a variável B passe a possuir o valor da variável A. Apresentar os valores trocados. -->