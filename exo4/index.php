<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Exercice 4</title>
</head>

<body>

 <?php
 
 $number1 = rand(1, 100);
 $number2 = rand(1, 100);
 
 function number($number1, $number2) {
    if ($number1 > $number2) {
        $result = 'Le nombre 1 est supérieur au nombre 2';
    } elseif ($number1 < $number2) {
        $result = 'Le nombre 1 est plus petit que le nombre 2';
    } else {
        $result = 'Les 2 nombres sont égaux!';
    } return $result;
 }
 
 ?>
    <p>Numéro 1 = <?= $number1 ?></p>
    <p>Numéro 2 = <?= $number2 ?></p>
    <p><?= number($number1, $number2) ?></p> 
  
</body>

</html>
