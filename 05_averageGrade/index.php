<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
</head>
<body>
  <form action="" method="GET">
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
  
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<!-- Escrever um algoritmo que leia o nome de um aluno e as notas das três provas que ele obteve no semestre. No final
informar o nome do aluno e a sua média (aritmética). -->