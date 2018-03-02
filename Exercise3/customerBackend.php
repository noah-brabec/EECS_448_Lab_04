<?php
  $ellsAmount = $_POST["ellsAmount"];
  $GSPAmount = $_POST["GSPAmount"];
  $downsAmount = $_POST["downsAmount"];
  $shipping = $_POST["shipping"];
  $username = $_POST["username"];
  $password = $_POST["password"];

  $orderTotal = ($ellsAmount*823)+($GSPAmount*2000)+($downsAmount*8534);

  if($shipping == "nextDay")
  {
    $orderTotal = $orderTotal+50;
  }
  if($shipping == "threeDay")
  {
    $orderTotal = $orderTotal+5;
  }

  echo "
  <h2>Order for ". $username ."</h2>
  <table border = '1';style='width:50%'>
  <tr>
    <th>Item</th>
    <th>Amount</th>
    <th>Price Per Pound</th>
    <th>Sub Total</th>
  </tr>
  <tr>
    <th>Ellsworth</th>
    <td>". $ellsAmount ."</td>
    <td>$823</td>
    <td>$". $ellsAmount*823 ."</td>
  </tr>
  <tr>
    <th>GSP/Corbin</th>
    <td>". $GSPAmount ."</td>
    <td>$2000</td>
    <td>$". $GSPAmount*2000 ."</td>
  </tr>
  <tr>
    <th>Downs</th>
    <td>". $downsAmount ."</td>
    <td>$8534</td>
    <td>$". $downsAmount*8534 ."</td>
  </tr>
  <tr>
    <th>". $shipping ."</th>
    <td>1</td>";
    if($shipping == "nextDay")
    {
      echo "<td>$50</td>
            <td>$50</td>";
    }
    if($shipping == "threeDay")
    {
      echo "<td>$5</td>
            <td>$5</td>";
    }
    if($shipping == "free")
    {
      echo "<td>$0</td>
            <td>$0</td>";
    }
  echo "</tr>
  </table><br>
  <h2>Order Total = $". $orderTotal ."</h2>";


 ?>
