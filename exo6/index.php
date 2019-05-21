<!DOCTYPE html>
<html lang="fr" dir="ltr">
    
    <head>
        <meta charset="utf-8">
        <title>Exercice 6</title>
    </head>
    
    <body>
        
  <?php 
  
  $firstname = Patrick;
  $lastname = Sohyer;
  $age = 26;
  
  function hello($firstname, $lastname, $age) {
     $result = 'Bonjour' . ' ' . $firstname . ' ' . $lastname . ' ' . 'tu as' . ' ' . $age . ' ' . 'ans'; 
  return $result;
     }
  
  ?>
        
        <p><?= hello($firstname, $lastname, $age);?>!</p>
        
    </body>
    
</html>
