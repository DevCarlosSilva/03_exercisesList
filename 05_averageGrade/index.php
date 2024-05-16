<!-- Write an algorithm that reads a student's name and the grades of the three tests he obtained during the semester. At the end, inform the student's name and their average (arithmetic). -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>05_averageGrade</title>
  <link rel="stylesheet" href="style.css">
  </head>
</head>
<body>
  <form action="" method="get">
    <input name="name" placeholder="Name">
    <input name="grade1" type="float" min="0" max="10" placeholder="First grade">
    <input name="grade2" type="float" min="0" max="10" placeholder="Second grade">
    <input name="grade3" type="float" min="0" max="10" placeholder="Third grade">
    <input type="submit" value="Submit">
  </form>
  <?php
  if (isset($_GET["name"]) && isset($_GET["grade1"]) && isset($_GET["grade2"]) && isset($_GET["grade3"]) && 
      $_GET["name"] != "" && $_GET["grade1"] != "" && $_GET["grade2"] != "" && $_GET["grade3"] != "") {
        $name = $_GET["name"];
        $grade1 = $_GET["grade1"];
        $grade2 = $_GET["grade2"];
        $grade3 = $_GET["grade3"];
        $gradeAverage = number_format(($grade1 + $grade2 + $grade3) / 3, 1);
        echo "<br>" . "The student " . $name . " achieved a grade average of: " . $gradeAverage;
  }
  ?>
</body>
</html>