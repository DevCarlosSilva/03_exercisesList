<!-- A concessionária de veículos “CARANGO VELHO” está vendendo os seus veículos com desconto. Faça um algoritmo que calcule e exiba o valor do desconto e o valor a ser pago pelo cliente de vários carros. O desconto deverá ser calculado de acordo com o ano do veículo. Até 2000 - 12% e acima de 2000 - 7%. O sistema deverá perguntar se deseja continuar calculando desconto até que a resposta seja: “(N) Não” . Informar total de carros com ano até 2000 e total geral. -->

<form action="" method="get">
  <input name="name" placeholder="Name">
  <input name="year" placeholder="Year">
  <input name="price" placeholder="Price">
  <input type="submit" value="Submit">
</form>

<?php
if (isset($_GET['name']) && !empty(trim($_GET['name'])) && isset($_GET['year']) && !empty(trim($_GET['year'])) && isset($_GET['price']) && !empty(trim($_GET['price']))) {
    $name = $_GET['name'];
    $year = $_GET['year'];
    $price = $_GET['price'];
    
    echo '<link href="index.php" value="Restart?">';
}

// CARRO 1 (1988) - R$ 8726,00 - 12%