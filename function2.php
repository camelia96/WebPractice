<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>function</h1>
    <h2>Basic</h2>

    <?php
      function basic() {
        print("Lorem ipsum dolor1<br>");
        print("Lorem ipsum dolor2<br>");
      }

      basic();
    ?>

    <h2>parameter & argument</h2>
    <?php
      function sum($left, $right){
        print($left +  $right);
        print("<br>");
      }

      sum(2,4);
      sum(3,5);
    ?>

    <h2>return</h2>
    <?php
      function sum2($left, $right){
        $sum = $left + $right;
        return $sum;
      }

      print(sum2(2,4));
      file_put_contents('result.txt', sum2(2,4));
    ?>


  </body>
</html>
