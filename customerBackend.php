<?php
 $username = $_POST['username'];
 $password = $_POST['password'];
 $sofa = $_POST['sofa'];
 $tomato = $_POST['tomato'];
 $pencil = $_POST['pencil'];
 $shipping = $_POST['shipping'];

 echo "<table style='width:auto'>";
 echo "<tr><td></td>";
 echo "<td>Quantity</td>";
 echo "<td>Cost Per Item</td>";
 echo "<td>Sub Total</td></tr>";

 echo "<tr><td>Sofa</td>";
 echo "<td>" . $sofa . "</td>";
 echo "<td>$3.25</td>";
 echo "<td>$". $sofa*3.25 ."</td>";

 echo "<tr><td>Tomato</td>";
 echo "<td>" . $tomato . "</td>";
 echo "<td>$40</td>";
 echo "<td>$" . $tomato*40 . "</td>";

 echo "<tr><td>Pencil</td>";
 echo "<td>" . $pencil . "</td>";
 echo "<td>$9,000</td>";
 echo "<td>$" . $pencil*9000 . "</td>";

 echo "<tr><td>Shipping</td>";
 echo "<td>" . $shipping . "</td>";
 echo "<td></td>";

 echo "<tr><td>Total Cost</td>";
 echo "<td></td>" . $sofa*3.25 + $tomato*40 + $pencil*9000 . "</tr>";
 ?>
