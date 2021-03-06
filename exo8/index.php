<!DOCTYPE html>
<html lang="fr" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Exercice 8</title>
    </head>

    <body>

        <?php
        $number1 = rand(1, 2000);
        $number2 = rand(1, 2000);
        $number3 = rand(1, 2000);

        function calcul($number1, $number2, $number3) {
            $result = $number1 + $number2 + $number3;
            return $result;
        }
        ?>
        <div class="text-center text-danger">
            <p>Nombre 1 = <?= $number1; ?></p>
            <p>Nombre 2 = <?= $number2; ?></p>
            <p>Nombre 3 = <?= $number3; ?></p>

            <p> <?= calcul($number1, $number2, $number3) ?></p>
        </div

        <p><a href="http://phpexercice/partie4/exo1/">Partie 4 exerice 1</a></p>
        <p><a href="http://phpexercice/partie4/exo2/">Partie 4 exerice 2</a></p>
        <p><a href="http://phpexercice/partie4/exo3/">Partie 4 exerice 3</a></p>
        <p><a href="http://phpexercice/partie4/exo4/">Partie 4 exerice 4</a></p>
        <p><a href="http://phpexercice/partie4/exo5/">Partie 4 exerice 5</a></p>
        <p><a href="http://phpexercice/partie4/exo6/">Partie 4 exerice 6</a></p>
        <p><a href="http://phpexercice/partie4/exo7/">Partie 4 exerice 7</a></p>
        <p><a href="http://phpexercice/partie4/exo8/">Partie 4 exerice 8</a></p>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>

</html>
