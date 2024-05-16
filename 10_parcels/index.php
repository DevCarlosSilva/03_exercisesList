<!-- The store Mamão com Açúcar is selling its products in 5 (five) interest-free installments. Create an algorithm that receives the value of a purchase and shows the value of the installments. -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>10_parcels</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form action="" method="get">
    <input type="Float" name="productPrice" placeholder="Product price">
    <input type="submit" value="Submit">
  </form>
  <?php
  if (isset($_GET["productPrice"]) && $_GET["productPrice"] != "") {
    $productPrice = $_GET["productPrice"];
    $parcelPrice = $productPrice / 5;
    echo "If the product costs R$" . $productPrice . ", every parcel would cost R$" . $parcelPrice;
  }
  ?>
</body>
</html>