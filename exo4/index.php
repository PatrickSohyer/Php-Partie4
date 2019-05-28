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
