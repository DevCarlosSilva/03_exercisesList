<!-- Escrever um algoritmo que leia o nome e o sexo de 56 pessoas e informe o nome e se ela é homem ou mulher. No final informe total de homens e de mulheres.  -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>19_manOrWoman</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$maleCounter = 0;
$femaleCounter = 0;
for ($i = 0; $i < 57; $i++) {
  $x = rand(0, 1);
  if ($x == 0) {
    $maleCounter++;
  } else {
    $femaleCounter++;
  }
}
echo 'There are ' . $maleCounter . ' men and ' . $femaleCounter . ' women.';
?>
</body>
</html>