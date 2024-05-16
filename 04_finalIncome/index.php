<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>04_finalIncome</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form action="" method="get">
  <input type="text" name="name" placeholder="Name">
  <input type="number" name="fixedSalary" placeholder="Fixed salary">
  <input type="number" name="salesAmount" placeholder="Sales amount">
  <input type="submit" value="Submit">
  </form>

  <?php
  if (isset($_GET["number1"]) && !empty($_GET["number1"]) && isset($_GET["number2"]) && !empty($_GET["number2"])) {
    $nome = $_GET["nome"];
    $salarioFixo = $_GET["salarioFixo"];
    $totalVendas = $_GET["totalVendas"];
    $comissao = $totalVendas * 0.15;
    $salarioMensal = $salarioFixo + $comissao;
    echo "Seu salário mensal é: " . $salarioMensal;
  }
  ?>
  
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<!-- Escrever um algoritmo que leia o nome de um vendedor, o seu salário fixo e o total de vendas efetuadas por ele no
mês (em dinheiro). Sabendo que este vendedor ganha 15% de comissão sobre suas vendas efetuadas, informar o
seu nome, o salário fixo e salário no final do mês. -->