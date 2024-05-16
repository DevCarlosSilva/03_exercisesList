<!-- Read 80 numbers and at the end inform how many number(s) are in the range between 10 (inclusive) and 150 (inclusive). -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>17_loopCounter</title>
  <link rel="stylesheet" href="style.css">
</head>
<?php
$counter = 0;
for ($i = 0; $i < 81; $i++) {
  $x = rand(0, 200);
  if ($x > 9 && $x < 151) {
    $counter++;
  }
}
echo 'There were ' . $counter . ' numbers between 10 and 150.';
?>
</body>
</html>