<!-- Create an algorithm that receives two numbers and shows the addition, subtraction, multiplication and division of the numbers read. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>02_arithmetic</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form action="" method="get">
  <input type="number" name="number1">
  <input type="number" name="number2">
  <input type="submit" value="Enviar">
  </form>

  <?php
  if(isset($_GET["number1"]) && isset($_GET["number2"])){
  $number1 = $_GET["number1"];
  $number2 = $_GET["number2"];
  $soma = $number1 + $number2;
  $subtracao = $number1 - $number2;
  $multiplicacao = $number1 * $number2;
  $divisao = $number1 / $number2;
  echo "Soma: " . $soma . "<br>" . "Subtração: " . $subtracao . "<br>" . "Multiplicação: " . $multiplicacao . "<br>" . "Divisão: " . $divisao;
  }  
  ?>
  
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
