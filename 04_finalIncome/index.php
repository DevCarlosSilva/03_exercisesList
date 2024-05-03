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
  <input type="text" name="nome" placeholder="Nome">
  <input type="number" name="salarioFixo" placeholder="Salário fixo">
  <input type="number" name="totalVendas" placeholder="Total de vendas">
  <input type="submit" value="Enviar">
  </form>

  <?php
  if(isset($_GET["nome"]) && isset($_GET["salarioFixo"]) && isset($_GET["totalVendas"])){
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