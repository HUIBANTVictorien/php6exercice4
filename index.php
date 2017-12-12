<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice 4 partie 3 php</title>
  </head>
  <body>
    <?php
    function calculate() {
      $number1 = 32;
      $number2 = 42;
      if ($number1 > $number2) {
        return 'le premier nombre est plus grand';
      }
      elseif ($number1 < $number2) {
        return 'le premier nombre est plus petit';
      }
      elseif ($number1 == $number2) {
        return 'les deux nombres sont identiques';
      }
    }
    echo calculate();
    ?>
  </body>
</html>
