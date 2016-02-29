<?php
//Inside myfirstprogram.php
function mult($x, $y) {
   $z = $x * $y;
   return $z;
}

echo "<table style='border: 1px solid gray; border-collapse: collapse;'>";
  echo "<tr style='border: 1px solid gray;text-align: center;'>";
    echo "<td class='headers' style='border: 1px solid gray;'> </td>";
    for ($x = 1; $x <= 100; $x++) {
       echo "<td id='col" . $x . "' class='headers' style='border: 1px solid gray'>" . $x . "</td>";
    }
  echo "</tr>";
  for($y = 1; $y <= 100; $y++) {
    echo "<tr style='border: 1px solid gray;text-align: center;'>";
      echo "<td id='row" . $y . "' class='headers' style='border: 1px solid gray;'>" . $y . "</td>";
      for ($x = 1; $x <= 100; $x++) {
         echo "<td title='" . $y . " x " . $x . "' onmouseover='highlight(" . $x . "," . $y . ")' onmouseout='normbgd(" . $x . "," . $y . ")' style='border: 1px solid gray;'>" . mult($x,$y) . "</td>";
      }
    echo "</tr>";
  }
echo "</table>";


?>
