<!-- Write an algorithm that reads the data of “N” people (name, sex, age and health) and reports whether or not they are fit to carry out mandatory military service. Enter the totals. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>21_militaryServiceForm</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="" method="get">
  <input name="name" placeholder="Name">
  <select name="sex">
    <option>Male</option>
    <option>Female</option>
  </select>
  <input type="number" name="age" placeholder="Age">
  <select name="health">
    <option value="Healthy">Healthy</option>
    <option value="Unhealthy">Unhealthy</option>
  </select>
  <input type="submit" value="Submit">
</form>
<?php
session_start();
$_SESSION['fitPeople'] = $_SESSION['fitPeople'];
$_SESSION['notFitPeople'] = $_SESSION['notFitPeople'];
$_SESSION['totalPeopleCounter'] = $_SESSION['totalPeopleCounter'];
if (isset($_GET['name']) && !empty(trim($_GET['name'])) && isset($_GET['age']) && !empty($_GET['age'])) {
  $_SESSION['totalPeopleCounter']++;
  $name = $_GET['name'];
  $sex = $_GET['sex'];
  $age = $_GET['age'];
  $health = $_GET['health'];
  if ($age < 40 && $health == 'Healthy') {
    echo '<br>You, ' . $name . ', are fit for carrying out mandatory military service.<br>';
    $_SESSION['fitPeople']++;
  } else {
    echo '<br>You, ' . $name . ', are not fit for carrying out mandatory military service.<br>';
    $_SESSION['notFitPeople']++;
  }
}
echo $_SESSION['fitPeople'] . ' Out of ' . $_SESSION['totalPeopleCounter'] . ' people are fit for carrying out mandatory military service.<br>';
echo $_SESSION['notFitPeople'] . ' Out of ' . $_SESSION['totalPeopleCounter'] . ' people are not fit for carrying out mandatory military service.';
?>
</body>
</html>