<!DOCTYPE html>
<html>
<!--
Name: Eric Burch
Date: 3/1/2022
Section: CSC4370
Assignment: HW03
Four PHP Functions
-->
  <head>
    <style>
      table{
        width: 300px;
        border-spacing: 1px;
      }
      td{
        width: 35px;
        height: 35px;
        border: 1px solid black;
        padding: 1px;
      }
      .red{
        background: red;
      }
      .black{
        background: black;
      }
    </style>
    <title>HW03</title>
  </head>
  <body>
    <h1> Part One </h1>
    <?php
      $temp = isBitten();
      if($temp == true){
        echo "Charlie ate my lunch!";
      }else{
        echo "Charlie didn't eat my lunch!";
      }
      function isBitten(){
        $rand = rand(0,1);
        if($rand == 0){
          return true;
        }else{
          return false;
        }
      }
    ?>

    <h1> Part Two </h1>
    <table>
        <?php
          checkerBoard();
          function checkerBoard(){
            for($j = 0; $j < 8; $j++){
              echo "<tr>";
              for($i = 0; $i < 8; $i++){
                if(($i + $j) % 2 == 0){
                  echo "<td class = 'red'></td>";
                }else{
                  echo "<td class = 'black'></td>";
                }     
              }
            }
            echo "</tr>";
          }
        ?>
    </table>

    <h1> Part Three </h1>
    <?php
      $months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
      $length = count($months);
      for($i = 0; $i < $length; $i++){
        echo "$months[$i]";
        echo ", ";
      }
      echo "<br>";
      sort($months);
      for($i = 0; $i < $length; $i++){
        echo "$months[$i]";
        echo ", ";
      }
      ?>
      <?php
      $months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
      echo "<h1> ForEach Loop </h1>";
      foreach ($months as $i){
        echo "$i";
        echo ", ";
      }
      sort($months);
      echo "<br>";
      foreach ($months as $i){
        echo "$i";
        echo ", ";
      }
      ?>
        <br>
        <br>
        <a href = "./PartFour.php"> Part Four Link </a>
  </body>
</html>
