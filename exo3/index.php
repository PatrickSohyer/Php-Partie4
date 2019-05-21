<!DOCTYPE html>
<html lang="fr" dir="ltr">
    
    <head>
        <meta charset="utf-8">
        <title>Exercice 3</title>
    </head>
    
    <body>
        
<?php

function string($string1, $string2) {
  $finalString = $string1 . ' ' . $string2;
  return $finalString;
}

 ?>
        
        <p><?= string('Les petits oiseaux', 'qui volent dans le ciel');  ?></p>
        
    </body>
    
</html>
