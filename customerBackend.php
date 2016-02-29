<?php
 $username = $_POST['username'];
 $password = $_POST['password'];
 $sofa = $_POST['sofa'];
 $tomato = $_POST['tomato'];
 $pencil = $_POST['pencil'];
 $shipping = $_POST['shipping'];
 $label = '';
 $shcost = 0;
 if($shipping == 1)
 {
   $label = "7 day";
   $shcost = 0;
 }
 else if($shipping == 2)
 {
   $label = "Over night";
   $shcost = 50;
 }
 else {
   $label = "3 Day";
   $shcost = 5;
 }

 echo "<html><head><title>Receipt</title><link rel='stylesheet' type='text/css' href='style.css'></head><body>";
 echo "<h1>Receipt</h1>";
 echo "Username: " . $username . "<br>";
 echo "Password: " . $password . "<br>";
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

 echo "<tr><td colspan='2'>Shipping</td>";
 echo "<td>" . $label . "</td>";
 echo "<td>$" . $shcost . "</td>";

 $total = $sofa*3.25 + $tomato*40 + $pencil*9000 + $shcost;

 echo "<tr><td colspan='3' >Total Cost</td>";
 echo "<td>$" . $total . "</td></tr>";
 echo "</table>";
echo "</body></html>";

 ?>
