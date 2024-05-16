<!-- Read two values for variables A and B, and exchange the values so that variable A now has the value of variable B and variable B now has the value of variable A. Present the exchanged values. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>06_valueTrade</title>
  <link rel="stylesheet" href="style.css">
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
</body>
</html>