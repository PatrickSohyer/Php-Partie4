<!DOCTYPE html>
<html lang="fr" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>Exercice 3</title>
    </head>

    <body>

        <?php

        function string($string1, $string2) { // je créer une fonction à laquelle j'ajoute 2 paramètres 
            $finalString = $string1 . ' ' . $string2; // je créer une variable qui va concaténer les 2 paramètres
            return $finalString; // je retourne la variable finale
        }
        ?>

        <p><?= string('Les petits oiseaux', 'qui volent dans le ciel'); ?></p>

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
