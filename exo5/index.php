<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Exercice 5</title>
</head>

<body>

   <?php 
   
   $string = 'Neymar porte le numéro';
   $number = 10;
   
   function Neyney($string, $number) {
       $result = $string . ' ' . $number;
       return $result;
   }
   
   ?>

    <p> <?= Neyney($string, $number); ?>!</p>
</body>

</html>
