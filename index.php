<?php
function calculate($number1 = 10, $number2 = 5, $number3 = 25){
  return $number1 + $number2 + $number3;
}
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 8/4</title>
  </head>
  <body>
    <p>
      <?= calculate(); // Si on met des paramètres ils écrasent les paramètres par défaut ?> 
    </p>
  </body>
</html>
