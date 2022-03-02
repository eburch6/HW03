<!DOCTYPE html>
<html>
  <head>
    <style>
      td{
        border: 1px solid black;
        padding: 1px;
      }
    </style>
    <title> Part Four </title>
  </head>
  <body>
    <h1> Part Four </h1>
    <?php
      $restaurants = array("Fogo de Chão", "Aviva by Kameel", "Bone’s Restaurant", "Umi Sushi Buckhead", "Fandangles", "Capital Grille", "Canoe", "One Flew South", "Fox Bros. BBQ", "South City Kitchen Midtown");
      $prices = array("$40.50", "$15.00", "$65.00", "$40.50", "30.00", "60.50", "35.50", "$21.00", "$15.00", "$29.00",);
      $length = count($restaurants);
      $length2 = count($prices);
      echo "<table>";
        echo "<tr>";
          for($i = 0; $i < $length; $i++){
          echo "<td>$restaurants[$i]</td>";
          echo ", ";
          }
        echo "</tr>";
        echo "<tr>";
          for($j = 0; $j < $length2; $j++){
          echo "<td>$prices[$j]</td>";
          echo ", ";
          }
        echo "</tr>";
      echo "</table>";

      echo "<h1> Alphabetical Order </h1>";
      sort($restaurants);
      echo "<table>";
        echo "<tr>";
          for($i = 0; $i < $length; $i++){
          echo "<td>$restaurants[$i]</td>";
          echo ", ";
          }
        echo "</tr>";
        echo "<tr>";
          for($j = 0; $j < $length2; $j++){
          echo "<td>$prices[$j]</td>";
          echo ", ";
          }
        echo "</tr>";
      echo "</table>";

      echo "<h1> Price Changed </h1>";
      sort($prices);
      echo "<table>";
        echo "<tr>";
          for($i = 0; $i < $length; $i++){
          echo "<td>$restaurants[$i]</td>";
          echo ", ";
          }
        echo "</tr>";
        echo "<tr>";
          for($j = 0; $j < $length2; $j++){
          echo "<td>$prices[$j]</td>";
          echo ", ";
          }
        echo "</tr>";
      echo "</table>";
    ?>
  </body>
</html>