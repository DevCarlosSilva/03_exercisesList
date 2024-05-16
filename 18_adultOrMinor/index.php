<!-- Create an algorithm that receives the ages of 75 people and displays a message stating “adult” and “minor” for each person. Consider age 18 and over as an adult. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>18_adultOrMinor</title>
</head>
<body>
<?php
for ($i = 0; $i < 76; $i++) {
  $x = rand(0, 100);
  if ($x > 18) {
    echo 'Adult | ';
  } else {
    echo 'Minor | ';
  }
}
?>
</body>
</html>