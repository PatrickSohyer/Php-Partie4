<!DOCTYPE html>
<html lang="fr" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>Exercice 7</title>
    </head>

    <body>

        <?php
        $gender = [0 => 'homme', 1 => 'femme'];
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
            } return $result;
        }
        ?>

        <p>Sexe : <?= $gender[$genderRand]; ?></p>
        <p>Âge : <?= $age; ?></p>
        <p><?= compare($gender, $genderRand, $age); ?>!</p>

        <p><a href="http://phpexercice/partie4/exo1/">Partie 4 exerice 1</a></p>
        <p><a href="http://phpexercice/partie4/exo2/">Partie 4 exerice 2</a></p>
        <p><a href="http://phpexercice/partie4/exo3/">Partie 4 exerice 3</a></p>
        <p><a href="http://phpexercice/partie4/exo4/">Partie 4 exerice 4</a></p>
        <p><a href="http://phpexercice/partie4/exo5/">Partie 4 exerice 5</a></p>
        <p><a href="http://phpexercice/partie4/exo6/">Partie 4 exerice 6</a></p>
        <p><a href="http://phpexercice/partie4/exo7/">Partie 4 exerice 7</a></p>
        <p><a href="http://phpexercice/partie4/exo8/">Partie 4 exerice 8</a></p>

    </body>

</html>
