<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Exercice 7</title>
</head>

<body>

    <?php
    
    $gender = [0=>'homme',1=>'femme'];
    $genderRand = array_rand($gender);
    $age = rand(1, 100);
    
    function compare($gender, $genderRand, $age) {
        if ($gender[$genderRand] == 'homme' AND $age >= 18) {
            $result = 'Vous êtes un homme et vous êtes majeur';
        } elseif ($gender[$genderRand] == 'homme' AND $age < 18) {
            $result = 'Vous êtes un homme et vous êtes mineur';
        } elseif ($gender[$genderRand] == 'femme' AND $age >= 18) {
            $result = 'Vous êtes une femme et vous êtes majeur';
        } elseif ($gender[$genderRand] == 'femme' AND $age < 18) {
            $result = 'Vous êtes une femme et vous êtes mineur';
        }   return $result;
    }
    
    ?>
    
    <p>Sexe : <?= $gender[$genderRand]; ?></p>
    <p>Âge : <?= $age; ?></p>
    <p><?= compare($gender, $genderRand, $age); ?>!</p>
    
</body>

</html>
