<!DOCTYPE html>
<!-- ICS2O-Unit3-01-PHP-AreaTrapezoid -->
<html lang="en-ca">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Area of trapezoid in php edition because php makes everything better">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Katie G">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css"> 
    <title>trapezoid aka the prettiest shape in php this time wow wow</title>
 
    <!-- wow favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png">
  </head>
<body>
  <!-- PHP echo time for webpage header oh man -->
  <?php 
    echo "<h1>Area of Trapezoid in PHP</h1>";
  ?>

  <!-- form to do the area thing -->
  <form action="./results.php" method="post" target="results">
    <label for="long-base">Longer of the two bases in cm</label>
    <input type="number" id="long-base" placeholder="Long Base wow!!" name="long-base">
    <br>
    <br>
    <label for="short-base">Shorter of the two bases in cm</label>
    <input type="number" id="short-base" placeholder="Short base wow!!" name="short-base">
    <br>
    <br>
    <label for="height">Height in cm</label>
    <input type="number" id="height" placeholder="Height wow!!" name="height">
    <br>
    <br>
    <input type="submit" value="Calculate Please :)"
    <br>
    <br>
  </form>

  <!-- Frame for the results because boy do they be appearing -->
  <iframe id="results" name="results">
    The area of the trapezoid is " + $area + cm<sup>2</sup>"
  </iframe>
</body>
</html>