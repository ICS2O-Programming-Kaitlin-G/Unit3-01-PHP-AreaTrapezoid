<?php
  $long_base = $_POST["long-base"];
  $short_base = $_POST["short-base"];
  $height = $_POST["height"];
  $area = ($long_base + $short_base) / 2 * $height;
?>
<h5> hey guess what it's time for area wake up be happy!</h5>
<?php echo "the area of the trapezoid is " . $area . " cm<sup>2</sup>" ?>